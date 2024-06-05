<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Asaas\CustomerController;
use App\Models\CreditCardDetail;
use App\Models\Juno_token;
use Illuminate\Support\Carbon;
use App\Models\Service;
use App\Models\Client;
use Jetimob\Juno\Lib\Model\Charge;
use Jetimob\Juno\Lib\Model\Billing;
use Jetimob\Juno\Facades\Juno;
use Jetimob\Juno\Lib\Http\Charge\ChargeCreationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Client as GuzzleHttp;
use App\Models\Log_central;
use App\Http\Controllers\LogCentralController;
use App\Models\Asaas\Asaas;
use App\Models\Asaas\AsaasCustomer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class CreditCardsController extends Controller
{
    /**
     * Display a listing of CreditCard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId)
    {
        return view('client.credit_card', compact('userId'));
    }

    /**
     * Show the form for creating new CreditCard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created CreditCard in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function getCreditCards(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'cod_source' => 'required',
            'source_request' => 'required',
            'salesman_id' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            $messageError = $validator->errors();
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
        }
        if (Auth::user()->id == $request->user_id) {

            return CreditCardDetail::where('user_id', $request->user_id)
                ->where('payment_gateway_id', 2)
                ->select('id', 'last4CardNumber', 'expirationYear', 'expirationMonth')
                ->get();
        } else {
            $messageError = 'Usuário sem permisão para realizar esta ação';
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
        }
    }



    public static function userCreditCardTokenization(Request $request)
    {
        Log::info($request);
        $loggedUser = Auth::user();
        $request->user_id = $request->user_id ?? $loggedUser->id;

        $asaasTokens = Asaas::tokens($loggedUser->franchise_id);

        $validator = Validator::make($request->all(), [
            "creditCardCcv" => "required|string",
            "creditCardHolderName" => "required|string",
            "creditCardExpiryMonth" => "required|string",
            "creditCardNumber" => "required|string",
            "creditCardExpiryYear" => "required|string",
        ]);


        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 422);
        }

        $customer = AsaasCustomer::where("user_id", $loggedUser->id)->first();

        if (!$customer) {
            $customer = CustomerController::create($request)->getData();
        }

        // Verificar se o cartão de crédito já existe
        $creditCardExists = CreditCardDetail::where("user_id", $request->user_id)
            ->where(
                "last4CardNumber",
                substr($request->creditCardNumber, -4)
            )->first();

        if (!empty($creditCardExists)) {
            return response()->json(["message" => "Esse cartão de crédito já foi cadastrado."], 422);
        }

        // Tokenizar o cartao
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $asaasTokens->access_token
        ])->post(config("routes.ASAAS") . 'creditCard/tokenizeCreditCard', [
            "creditCardCcv" => $request->creditCardCcv,
            "creditCardHolderName" => $request->creditCardHolderName,
            "creditCardExpiryMonth" => $request->creditCardExpiryMonth,
            "creditCardNumber" => $request->creditCardNumber,
            "creditCardExpiryYear" => $request->creditCardExpiryYear,
            "customer" => $customer->customer_id
        ]);

        if ($response->failed()) {
            Log::info($asaasTokens->access_token);
            return response()->json(["message" => "Não foi possível cadastrar o cartão", "errors" => $response["errors"]], 422);
        };

        // Salvando o cartão no DB
        $creditCard = CreditCardDetail::create([
            "user_id" => $loggedUser->id,
            "last4CardNumber" => $response['creditCardNumber'],
            "creditCardId" => $response['creditCardToken'],
            "expirationYear" => +$request->creditCardExpiryYear,
            "expirationMonth" => +$request->creditCardExpiryMonth,
            "payment_gateway_id" => 2 // asaas
        ]);



        return response()->json($creditCard);
    }

    /**
     * Show the form for editing CreditCard.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update CreditCard in storage.
     *
     * @param  \App\Http\Requests\UpdateCreditCardsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Display CreditCard.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Remove CreditCard from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $credit_card = CreditCardDetail::findOrFail($id);
        if ($credit_card->delete()) {
            return response()->json(['message' => 'success', 'content' => 'Cartão excluído com sucesso!']);
        }
        return response()->json(['message' => 'failed', 'content' => 'Falha ao excluir o cartão!']);
    }

    /**
     * Delete all selected CreditCard at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        //
    }

    // @request Array
    // execute credit_card payment when a charge is generated
    public static function payment(Request $request, $chargeId, $creditCardId)
    {
        $request->source =  request()->route()->getActionName();

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'cod_source' => 'required|int'
        ]);

        if ($validator->fails()) {
            $messageError = $validator->errors();
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
        }

        if (Juno_token::authorizationServer() != 200) {
            $messageError = "Falha ao realizar autenticação JUNO.";
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
        }


        $juno_token = Juno_token::where('version', 2)->first();
        $token_privado = $juno_token->token_privado;
        $access_token = $juno_token->access_token;
        $integration_link = $juno_token->integration_link . "payments?access_token=" . $access_token;
        $client = Client::where('user_id', $request->user_id)->first();
        $user_logado = Auth::user();
        $creditCard = CreditCardDetail::where('id', $creditCardId)->first();

        if ($creditCard->user_id == $user_logado->id) {

            $token_privado = Juno_token::where('version', 2)->value('token_privado');

            // make requisition and generate charge
            try {

                $req = new GuzzleHttp(['headers' => ['X-Api-Version' => '2', 'X-Resource-Token' => $token_privado, 'Content-Type' => 'application/json']]);

                return  $req->request('POST', $integration_link, [
                    'json' => [
                        'chargeId' => $chargeId,
                        'billing' => [
                            'email' => $client->user->email,
                            'address' => [
                                'street' => $client->address->street,
                                'number' =>  $client->address->number,
                                'complement' =>  $client->address->complement,
                                'neighborhood' =>  $client->address->neighborhood,
                                'city' =>  $client->address->city->title,
                                'state' =>  $client->address->city->state->uf,
                                'postCode' => self::tirarCaracteresEspeciais($client->address->zip),
                            ],
                            'delayed' => true
                        ],
                        'creditCardDetails' => [
                            'creditCardId' => $creditCard->creditCardId,
                        ]
                    ]
                ]);

                // return json_decode($res->getBody()->getContents(), true); //parse to json

            } catch (ClientException $e) {
                $data = (json_decode($e->getResponse()->getBody()->getContents(), true));
                $message = $data['details'][0]['message'];
                $errorCode = $data['details'][0]['errorCode'];
                $messageError = "Falha ao realizar pagamento no cartao de credito. Message: " . $message . " - errorCode: " . $errorCode;
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
            }
        } else {
            $messageError = "Error: CreditCardId, não pertence a este usuário";
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
        }
    }

    //Aqui é criada a função que recebe apenas uma variável de texto
    public static function tirarCaracteresEspeciais($string)
    {
        //Usa a função para padronizar a codificação da página
        $string = utf8_encode($string);
        //Trim retira os espaços vazios no começo e fim da variável
        $string = trim($string);
        //str_replace substitui um carácter por outro, nesse caso espaço por nada
        $string = str_replace(' ', '', $string);
        //Aqui substitui o underline por nada
        $string = str_replace('_', '', $string);
        //Aqui retira a barra
        $string = str_replace('/', '', $string);
        //Nessa linha o traço
        $string = str_replace('-', '', $string);
        //A abertura de parenteses
        $string = str_replace('(', '', $string);
        //O fechamento de parenteses
        $string = str_replace(')', '', $string);
        //O ponto
        $string = str_replace('.', '', $string);
        //No fim é retornado a variável com todas as alterações
        return $string;
    }
}
