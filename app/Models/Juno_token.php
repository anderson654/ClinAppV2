<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Client;

/**
 * Class Juno_token
 *
 * @package App
 * @property string $title
 */
class Juno_token extends Model
{
    use HasFactory;

    protected $fillable = ['clientId', 'clientSecret', 'authorization_url', 'access_token', 'version', 'token_privado', 'integration_link', 'updated_at'];
    protected $hidden = [];

    // updates private token from juno
    static function authorizationServer()
    {
        $juno_token = Juno_token::where('version', 2)->first();
        $now = \Carbon\Carbon::now();

        $diff = $now->diffInSeconds($juno_token->updated_at);

        if ($diff <= 3600) {
            return "200";
        }

        $clientId = $juno_token->clientId;
        $clientSecret = $juno_token->clientSecret;
        $authorization_url = $juno_token->authorization_url;
        $base64 = base64_encode("$clientId:$clientSecret");

        try {
            $req = new Client(['headers' => ['Content-Type' => 'x-www-form-urlencoded', 'Authorization' => "Basic $base64"]]);
            $res = $req->request('POST', $authorization_url, [
                'form_params' => [
                    'grant_type' => 'client_credentials'
                ]
            ]);
            $data = json_decode($res->getBody()->getContents(), true); //parse to json

            if (isset($data['access_token'])) {
                $juno_token->access_token = $data['access_token'];
                $juno_token->save();
                return "200";
            } else {
                return "erro" . $data;
            }
        } catch (ClientException $e) {
            Log::info("Falha ao renovar token da juno");
            Log::info(Message::toString($e->getRequest()));
            return "erro";
        }
    }















    //Funções Abaixo não são mais utilizadas

    // @request Object
    // generates a new charge for clients
    static function charge($request)
    {
        // update juno token to generate charge
        $authorization_server = Juno_token::authorizationServer();
        if ($authorization_server != 200) {
            return "erro";
        }

        $email = strtolower(trim($request['email']));
        $token_privado = Juno_token::where('version', 2)->value('token_privado');

        $pixKey = isset($request['pixKey']) ? $request['pixKey'] : null;
        $request['document'] = str_replace(['.', '-', ','], '', $request['document']);

        // make requisition and generate charge
        try {
            $req = new Client(['headers' => ['X-Api-Version' => '2', 'X-Resource-Token' => $token_privado, 'Content-Type' => 'application/json']]);
            $res = $req->request('POST', $request['integration_link'], [
                'json' => [
                    'charge' => [
                        'pixKey' => $pixKey,
                        'description' => $request['description'],
                        'references' => ["1"],
                        'amount' => $request['amount'],
                        'dueDate' => $request['dueDate'],
                        'paymentTypes' => [$request['paymentTypes']]
                    ],
                    'billing' => [
                        'name' => $request['name'],
                        'document' => $request['document'],
                        'email' => $email,
                        'notify' => true
                    ]
                ]
            ]);

            $data = json_decode($res->getBody()->getContents(), true); //parse to json
            return $data;
        } catch (ClientException $e) {
            Log::info("Falha ao gerar boleto.");
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        }
    }

    // @request Array
    // execute credit_card payment when a charge is generated
    public static function payments($request)
    {
        $authorization_server = Juno_token::authorizationServer();
        if ($authorization_server != 200) {
            return "erro";
        }

        $token_privado = Juno_token::where('version', 2)->value('token_privado');

        // make requisition and generate charge
        try {
            $req = new Client(['headers' => ['X-Api-Version' => '2', 'X-Resource-Token' => $token_privado, 'Content-Type' => 'application/json']]);
            $res = $req->request('POST', $request['integration_link'], [
                'json' => [
                    'chargeId' => $request['chargeId'],
                    'billing' => [
                        'email' => $request['email'],
                        'address' => [
                            'street' => $request['street'],
                            'number' => $request['number'],
                            'complement' => $request['complement'],
                            'neighborhood' => $request['neighborhood'],
                            'city' => $request['city'],
                            'state' => $request['state'],
                            'postCode' => $request['postCode'],
                        ],
                        'delayed' => true
                    ],
                    'creditCardDetails' => [
                        'creditCardId' => $request['creditCardId'],
                    ]
                ]
            ]);

            $data = json_decode($res->getBody()->getContents(), true); //parse to json
            return $data;
        } catch (ClientException $e) {
            Log::info("Falha ao gerar boleto.");
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        }
    }

    // @request Array
    // make a transfer to specific professional
    public static function transfer($request)
    {
        // update juno token to generate charge
        $authorization_server = Juno_token::authorizationServer();
        if ($authorization_server != 200) {
            return "erro";
        }

        $token_privado = Juno_token::where('version', 2)->value('token_privado');
        $request['document'] = str_replace(['.', '-', ','], '', $request['document']);

        // make requisition and transfer amount
        try {
            $req = new Client(['headers' => ['X-Api-Version' => '2', 'X-Resource-Token' => $token_privado, 'Content-Type' => 'application/json']]);
            $res = $req->request('POST', $request['integration_link'], [
                'json' => [
                    'type' => 'BANK_ACCOUNT',
                    'name' => $request['name'],
                    'document' => $request['document'],
                    'amount' => $request['amount'],
                    'bankAccount' => [
                        'bankNumber' => $request['bankNumber'],
                        'agencyNumber' => $request['agencyNumber'],
                        'accountNumber' => $request['accountNumber'],
                        'accountComplementNumber' => $request['accountComplementNumber'],
                        'accountType' => $request['accountType']
                    ]
                ]
            ]);

            $data = json_decode($res->getBody()->getContents(), true); //parse to json
            return $data;
        } catch (ClientException $e) {
            Log::info("Falha ao realizar transferência para profissional " . $request['name']);
            return json_decode($e->getResponse()->getBody()->getContents(), true);
        }
    }

    public static function cancelation($id, $pendingId)
    {
        // update juno token to generate charge
        $authorization_server = Juno_token::authorizationServer();
        if ($authorization_server != 200) {
            return "erro";
        }

        // iniciate variables
        $juno_token = Juno_token::where('version', 2)->first();
        $token_privado = $juno_token->token_privado;
        $access_token = $juno_token->access_token;
        $integration_link = $juno_token->integration_link . "charges/$id/cancelation?access_token=" . $access_token;

        try {
            $req = new Client(['headers' => ['X-Api-Version' => '2', 'X-Resource-Token' => $token_privado, 'Content-Type' => 'application/json']]);
            $res = $req->request('PUT', $integration_link);
            $data = json_decode($res->getBody()->getContents(), true); //parse to json

            $pending = Payment::where('id', $pendingId)->first();
            $pending->payment_status_id = 3;
            $pending->save();

            return $data;
        } catch (ClientException $e) {
            Log::info("Falha ao cancelar boleto via API V2. Código: $id");
            Log::info(Message::toString($e->getResponse()));
            return "erro";
        }
    }

    public static function cancelationV1($id, $pendingId)
    {
        // update juno token to generate charge
        $authorization_server = Juno_token::authorizationServer();
        if ($authorization_server != 200) {
            return "erro";
        }

        // iniciate variables
        $juno_token = Juno_token::where('version', 1)->first();
        $token_privado = $juno_token->token_privado;
        $integration_link = $juno_token->integration_link . "cancel-charge?token=$token_privado&code=$id";

        try {
            $req = new Client();
            $res = $req->request('POST', $integration_link);
            $data = json_decode($res->getBody()->getContents(), true); //parse to json

            $pending = Payment::where('id', $pendingId)->first();
            $pending->payment_status_id = 3;
            $pending->save();

            return $data;
        } catch (ClientException $e) {
            Log::info("Falha ao cancelar boleto via API V1. Código: $id");
            Log::info(Message::toString($e->getResponse()));
            return "erro";
        }
    }
}
