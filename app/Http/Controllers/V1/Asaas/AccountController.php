<?php

namespace App\Http\Controllers\V1\Asaas;

use App\Http\Controllers\Controller;
use App\Models\Asaas\Asaas;
use App\Models\AsaasWebhoockEvent;
use App\Models\PaymentAccount;
use App\Models\Professional;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //aqui o metodo que cria a conta
        DB::beginTransaction();
        if (!$request->user_id) {
            return response()->json(["errors" => ['error' => 'user_id é obrigatório.']]);
        }


        try {
            //cria a profissional caso não exista
            Professional::createProfessional($request->user_id);
            $data = $this->getDocuments($request->user_id);
            $data['companyType'] = 'INDIVIDUAL';
            $data['webhooks'] = [
                [
                    "apiVersion" => 3,
                    "enabled" => true,
                    "interrupted" => false,
                    "name" => "Webhoock_proffisionais",
                    "url" => "https://testeWebHoock.com.br",
                    "email" => "andersong.salvador@gmail.com",
                    "sendType" => "SEQUENTIALLY",
                    "events" => $this->getEvents(1)
                ]
            ];

            //code...
            $response = $this->createAccountAsaas($data);

            if ($response->successful()) {
                $data = $response->getBody()->getContents();

                $data = json_decode($data);
                PaymentAccount::create([
                    'title' => $data->name,
                    'agency' => $data->accountNumber->agency,
                    'accountNumber' => $data->accountNumber->account,
                    'accountDigit' => $data->accountNumber->accountDigit,
                    'user_id'  => $request->user_id,
                    'walletId'  => $data->walletId,
                    'apiKey' => $data->apiKey,
                    'payment_gateway_id' => 2
                ]);

                DB::commit();
                return response()->json($data, 200);
            }
            // Determine if the status code is >= 400...
            if ($response->failed()) {
                throw new Exception($response->getBody()->getContents(), $response->getStatusCode());
            }
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return response()->json(["errors" => json_decode($th->getMessage())], (!!$th->getCode() ? $th->getCode() : 422));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Pega os eventos de acordo com o role_id passado
     * @param int $roleId
     * @return array
     */
    public function getEvents($roleId)
    {
        return AsaasWebhoockEvent::whereNotIn('id', [53, 54, 55, 56])->pluck('title');
    }

    /**
     * Verifica e retorna a documentação do user selecionado
     * @param $userId
     * @return object objeto formatado para ser enviado para o asaas;
     */

    public function getDocuments($userId)
    {
        $user = User::with('address')->with('professional')->find($userId);
        if (!$user->professional) {
            throw new Exception(json_encode(["error" => "Erro verifique se é uma profissional."]));
        }

        if (!$user->address->count()) {
            throw new Exception(json_encode(["error" => "Erro verifique se possui endereço registrado."]));
        }

        //verificar se o user tem os seguintes dados
        //     "name": "Juliana chuesz maieski",
        //     "email": "testeClin4@gmail.com",
        //     "cpfCnpj": "61340055090",
        //     "mobilePhone": "41997856462",
        //     "address": "Rua Arapongas",
        //     "addressNumber": "164",
        //     "province": "Capela Velha",
        //     "postalCode": "83706160",
        //     "birthDate": "1998-07-25",
        //     "companyType": "INDIVIDUAL",

        $data = [
            'name' => $user['name'],
            'email' => $user['email'] ?? "clin$user->id@clin.com.br",
            'cpfCnpj' => $user['cpf'],
            'mobilePhone' => isset($user['phone']) ? $user['phone'] . "" : null,
            'address' => $user->address[0]['street'],
            'addressNumber' => isset($user->address[0]['number']) ? $user->address[0]['number'] . "" : null,
            'province' => $user->address[0]['neighborhood'],
            'postalCode' => $user->address[0]['zip'],
            'birthDate' => $user->professional['birthdate']
        ];

        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|string',
            'cpfCnpj' => 'required|string',
            'mobilePhone' => 'required',
            'address' => 'required|string',
            'province' => 'required|string',
            'postalCode' => 'required|string',
            'birthDate' => 'required|string'
        ], [
            'required' => ':attribute é requerido',
            'string' => ':attribute deve ser uma string'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            throw new Exception($errors, 422);
        }

        return $data;
    }


    public function createAccountAsaas($data)
    {
        $response = Http::withoutVerifying()->withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => Asaas::tokens()['access_token']
        ])->post(config("routes.ASAAS") . 'accounts', $data);

        return $response;
    }
}
