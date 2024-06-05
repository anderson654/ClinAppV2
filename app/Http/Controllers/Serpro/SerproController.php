<?php

namespace App\Http\Controllers\Serpro;

use App\Http\Controllers\Controller;
use App\Models\DasProfessional;
use App\Models\Juno_token;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SerproController extends Controller
{

    public function autentication()
    {
        $tokens = Juno_token::find(4);

        // arquivo exportado em formato PFX ou P12 com a chave privada e senha
        // certificado eCNPJ ICP Brasil do contratante na loja Serpro
        $caminho_arquivo = "/var/www/laravel/public/";
        $certificado = $caminho_arquivo . 'cleanhouseexpresstecnologialtda31720371000171.pfx';
        $senha = env('CERTIFICADO_DIGITAL_PASSWORD');
        // credenciais loja Serpro para autenticação
        $hashbase64 =  base64_encode($tokens->clientId . ":" . $tokens->clientSecret);


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $tokens->authorization_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        curl_setopt($ch, CURLOPT_SSLCERTTYPE, "P12");
        curl_setopt($ch, CURLOPT_SSLCERT, $certificado);
        curl_setopt($ch, CURLOPT_SSLCERTPASSWD, $senha);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Basic $hashbase64",
            "Role-Type: TERCEIROS",
            "Content-Type: application/x-www-form-urlencoded"
        ));

        $response = curl_exec($ch);
        $response_array = json_decode($response, true);
        //curl_close($ch);

        if (curl_errno($ch)) {
            return response()->json([
                'message' => 'Falha na autenticação.'
            ], 401);
        } else {

            $tokens->token_privado = $response_array['jwt_token'];
            $tokens->access_token = $response_array['access_token'];

            $tokens->expires_in = Carbon::now()->addSeconds($response_array['expires_in']);
            $tokens->save();

            return response()->json([
                'jwt_token' => $response_array['jwt_token']
            ]);
        }
        return $this->testerequisicao($response_array);
    }



    public function GerarBarCodeDas(Request $request, $dasProfessional)
    {
        $tokens = Juno_token::find(4);


        if ($tokens->expires_in != \Carbon\Carbon::now()) {

            $response = $this->autentication();

            $content = $response->getContent();
            $data = json_decode($content);

            $jwt_token = $data->jwt_token;

            $status = $response->getStatusCode();

            if ($status === 401) {
                return response()->json([
                    'message' => 'A autenticação falhou'
                ], 401);
            }
        }
        $cnpj = $request->cnpj;
        $periodoApuracao = $request->periodoApuracao;

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $tokens->access_token,
            'jwt_token' => $jwt_token,
        ])->post($tokens->integration_link . 'Emitir', [
            "contratante" => [
                "numero" => "31720371000171",
                "tipo" => 2
            ],
            "autorPedidoDados" => [
                "numero" => "31720371000171",
                "tipo" => 2
            ],
            "contribuinte" => [
                "numero" => "$cnpj",
                "tipo" => 2
            ],
            "pedidoDados" => [
                "idSistema" => "PGMEI",
                "idServico" => "GERARDASCODBARRA22",
                "versaoSistema" => "1.0",
                "dados" => "{'periodoApuracao': $periodoApuracao
                            }"
            ]
        ]);

        if ($response->successful()) {
            $date = json_decode($response['dados']);
            $date = $date[0];
            $detalhamento = $date->detalhamento[0];
            $code = $detalhamento->codigoDeBarras;
            $dasProfessional->barCode = $code[0] . $code[1] . $code[2] . $code[3];
            $dasProfessional->save();
            return $response;
        }
        // Determine if the status code is >= 400...
        if ($response->failed()) {
            return $response;
        }
        // Determine if the response has a 400 level status code...
        if ($response->clientError()) {
            return $response;
        }
        // Determine if the response has a 500 level status code...
        if ($response->serverError()) {
            return $response;
        }
    }


    public function gerarDas(Request $request)
    {
        $tokens = Juno_token::find(4);


        if ($tokens->expires_in != \Carbon\Carbon::now()) {

            $response = $this->autentication();

            $content = $response->getContent();
            $data = json_decode($content);

            $jwt_token = $data->jwt_token;

            $status = $response->getStatusCode();

            if ($status === 401) {
                return response()->json([
                    'message' => 'A autenticação falhou.'
                ], 401);
            }
        }

        $cnpj = $request->cnpj;
        $periodoApuracao = $request->periodoApuracao;

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . $tokens->access_token,
            'jwt_token' => $jwt_token,
        ])->post($tokens->integration_link . 'Emitir', [
            "contratante" => [
                "numero" => "31720371000171",
                "tipo" => 2
            ],
            "autorPedidoDados" => [
                "numero" => "31720371000171",
                "tipo" => 2
            ],
            "contribuinte" => [
                "numero" => "$cnpj",
                "tipo" => 2
            ],
            "pedidoDados" => [
                "idSistema" => "PGMEI",
                "idServico" => "GERARDASPDF21",
                "versaoSistema" => "1.0",
                "dados" => "{
                                'periodoApuracao': $periodoApuracao
                            }"

            ]
        ]);

        if ($response->successful()) {
            //salvar no banco
            $date = json_decode($response['dados']);
            $date = $date[0];
            $detalhamento = $date->detalhamento[0];

            $dasProfessional = new DasProfessional();
            $dasProfessional->user_id = Auth::user()->id;
            $dasProfessional->value = $detalhamento->valores->total;
            $dasProfessional->pdf = str_ends_with($date->pdf, '/') ? substr($date->pdf, 0, strlen($date->pdf) - 1) : $date->pdf;
            $dasProfessional->barCode = null;
            $dasProfessional->expiration_date = Carbon::createFromFormat('Ymd', $detalhamento->dataVencimento)->format('Y-m-d');
            $dasProfessional->month = Carbon::createFromFormat('Ym',  $detalhamento->periodoApuracao)->format('Y-m');
            $dasProfessional->status_id = 1;
            $dasProfessional->save();
            return $dasProfessional;
        }
        // Determine if the status code is >= 400...
        if ($response->failed()) {
            return $response;
        }
        // Determine if the response has a 400 level status code...
        if ($response->clientError()) {
            return $response;
        }
        // Determine if the response has a 500 level status code...
        if ($response->serverError()) {
            return $response;
        }
    }

    public function listDasProfessional(Request $request)
    {
        $user = Auth::user();
        //checar o das deste mês se esta registrado na tabela
        $date = Carbon::now()->format('Y-m');
        //verifica se o das deste mês foi gerado
        $uniqueDas = DasProfessional::where('month', $date)->where('user_id', Auth::user()->id)->first();
        if (!$uniqueDas) {
            //gerar das deste mês
            $request = new Request();
            $request->merge([
                "cnpj" => $user->cnpj,
                "periodoApuracao" => date("Y") . date("m")
            ]);
            $dasProfessional = $this->gerarDas($request);
            if (!$dasProfessional) {
                return response()->json(['Message' => 'Erro ao gerar das entre em contato com o suporte.']);
            }
            $this->GerarBarCodeDas($request, $dasProfessional);
            // return response()->json('Esse mês ja foi gerado um DAS');
        }
        $listDas = DasProfessional::where('user_id', Auth::user()->id)->get();
        // $listDas = DasProfessional::where('month', $date)->where('user_id', Auth::user()->id)->get()->makeHidden(['pdf', 'barCode']);
        return response()->json($listDas, 200);
    }
}
