<?php

namespace App\Http\Controllers\Asaas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asaas\Asaas;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Client;
use Jetimob\Juno\Util\Log;
use App\Models\Asaas\AsaasCustomer;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\LogCentralController;
use App\Models\CorporateClient;
use App\Models\Professional;
use Doctrine\DBAL\Types\BooleanType;
use Illuminate\Support\Facades\Log as FacadesLog;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Boolean;

class CustomerController extends Controller
{

    public static function getAsaasCustomer(Request $request)
    {

        FacadesLog::info("Acesso ao token " . $request->billingType);
        FacadesLog::info("Acesso ao token " . $request->billingType);
        FacadesLog::info("Acesso ao token " . $request->billingType);
        FacadesLog::info("Acesso ao token " . $request->billingType);
        FacadesLog::info("Acesso ao token " . $request->billingType);
        FacadesLog::info("Acesso ao token " . $request->billingType);
        FacadesLog::info("Acesso ao token " . $request->billingType);
        if ($request->billingType != 'CREDIT_CARD') {
            if (isset($request->franchise_id)) {
                $customer = AsaasCustomer::where("user_id", $request->user_id)->where('franchise_id', $request->franchise_id)->first();
            } else {
                $customer = AsaasCustomer::where("user_id", $request->user_id)->first();
            }
        }else{
            if (isset($request->franchise_id)) {
                FacadesLog::info("Acesso ao token " . $request->franchise_id);
                FacadesLog::info("Acesso ao token " . $request->franchise_id);
                FacadesLog::info("Acesso ao token " . $request->franchise_id);
                FacadesLog::info("Acesso ao token " . $request->franchise_id);
                FacadesLog::info("Acesso ao token " . $request->franchise_id);
                $customer = AsaasCustomer::where("user_id", $request->user_id)->where('franchise_id', $request->franchise_id)->first();
            }
        }
        if (!$customer) {
            $customer = Self::create($request);
        }
        return $customer;
    }

    public static function create(Request $request)
    {
        $clientToFindOut = Auth::user() ?? User::where("id", $request->user_id)->first();
        //Caso seja um administrador, poderá gerar um cobrança para outros usuários

        // if (in_array($clientToFindOut->role_id, [0, 1, 6, 7])) {
        $client = Client::where('user_id', $request->user_id)->first();

        if (!$client) {
            $client = Professional::where('user_id', $request->user_id)->first();
        }
        if (!$client) {
            $client = CorporateClient::where('user_id', $request->user_id)->first();
        }

        // Caso seja um cliente, somente poderá gerar uma fatura para si mesmo
        if ($clientToFindOut->role_id == 4) {
            $client =  Client::where('user_id', $clientToFindOut->id)->first();
        }
        //Caso seja uma profissional poderá gerar uma fatura para si mesma (Por exemplo uma alteração de vencimento)
        if ($clientToFindOut->role_id == 3) {
            $client =  Professional::where('user_id', $clientToFindOut->id)->first();
        }

        if (!isset($request->access_token)) {
            $asaasTokens = Asaas::tokens();
        }

        //Caso não seja localizao o cadastro de client
        if (!$client) {
            /*****************LOG CENTRAL*********************/
            $messageError = "Error => Cliente não encontrado para criar o AsaasCostumer";
            $event_type = "E";
            $request->code = 401;
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }
        //pega o ducumento na tabela user
        $user = User::find($request->user_id);
        $document = $user->cpf ?? $user->cnpj ?? $client->cpf ?? $client->cnpj;
        $name = $client->name ?? $client->razao_social;

        FacadesLog::info("Teste".$request->access_token);
        FacadesLog::info("Teste".$request->access_token);
        FacadesLog::info("Teste".$request->access_token);
        FacadesLog::info("Teste".$request->access_token);
        FacadesLog::info("Teste".$request->access_token);
        FacadesLog::info("Teste".$request->access_token);

        // withoutVerifying
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $request->access_token ?? $asaasTokens->access_token
        ])->post(config("routes.ASAAS") . 'customers', [
            'name' => $name,
            'email' => $client->user->email,
            'cpfCnpj' => $document,
            'externalReference' => $client->user_id,
            'notificationDisabled' => 'true'
        ]);

        // Determine if the status code is >= 200 and < 300...
        if ($response->successful()) {
            $asaasCustomer = new AsaasCustomer;
            $asaasCustomer->user_id = $client->user->id;
            $asaasCustomer->customer_id = $response['id'];
            $asaasCustomer->franchise_id = $request->franchise_id ?? 1;
            $asaasCustomer->save();
            return $asaasCustomer;
        }


        // Determine if the status code is >= 400...
        if ($response->failed()) {


            if ($response->getStatusCode() == 403) {
                /*****************LOG CENTRAL*********************/
                $messageError = "failed 403 => "; //. $response->reason()." - statusCode => ".  $response->getStatusCode();
                $event_type = "E";
                $request->code = $response->getStatusCode();
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

            /*****************LOG CENTRAL*********************/
            $messageError = "failed => " . $response['errors'][0]['code'] . " - " . $response['errors'][0]['description'];
            $event_type = "E";
            $request->code = $response->getStatusCode();

            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        // Determine if the response has a 400 level status code...
        if ($response->clientError()) {
            if ($response->getStatusCode() == 403) {
                /*****************LOG CENTRAL*********************/
                $messageError = "clientError 403 => " . $response->reason() . " - statusCode => " .  $response->getStatusCode();
                $event_type = "E";
                $request->code = $response->getStatusCode();
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }
            /*****************LOG CENTRAL*********************/
            $messageError = "clientError => " . $response['errors'][0]['code'] . " - " . $response['errors'][0]['description'];
            $event_type = "E";
            $request->code = $response->getStatusCode();
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        // Determine if the response has a 500 level status code...
        if ($response->serverError()) {
            /*****************LOG CENTRAL*********************/
            $messageError = "serverError => " . $response['errors'][0]['code'] . " - " . $response['errors'][0]['description'];
            $event_type = "E";
            $request->code = $response->getStatusCode();
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }
        // }
    }

    function checkCustomer(string $cpf, string $customer_id): bool
    {
        //verifica se os dados do usuario batem com o do asaas
        $asaasTokens = Asaas::tokens();

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $asaasTokens->access_token
        ])->get(config("routes.ASAAS") . 'customers/' . $customer_id);
        if ($response->getStatusCode() != 200) {
            return false;
        }

        $response = json_decode($response->getBody()->getContents());
        return $response->cpfCnpj === $cpf;
    }
}
