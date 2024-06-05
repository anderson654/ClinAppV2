<?php

namespace App\Http\Controllers\Weni;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LogCentralController;
use App\Models\ControlSendTemplateWhats;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\User;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class ApiWeniController extends Controller
{
    public function sendCodeVerification(Request $request)
    {
        $weniToken = "9cc68d4a3de1f6629ecbd887f61289308dbc0545";

        $weniContact = $this->getWeniContact($request);

        $template_name = 'send_code_verification';

        if($weniContact->getStatusCode() == 200 || $weniContact->getStatusCode() == 201){

            if(isset($weniContact['results'][0]['uuid'])){

                $uuid = $weniContact['results'][0]['uuid'];
                $urns = $weniContact['results'][0]['urns'][0];

            }else{
                $uuid = $weniContact['uuid'];
                $urns = $weniContact['urns'][0];
            }

            $data = [
                'flow' => '755bb6b3-9943-4299-8355-4d9584655623',
                'contacts' => [$uuid],
                'urns' => [$urns],
                'params' => [
                                'verification_code' => $request->verification_code
                            ]
            ];

                // return $this->getWeniContact($request);
            try {
                $response = Http::withoutVerifying()->withHeaders([
                        'Content-Type' => 'application/json',
                        'Authorization' => 'Token '.$weniToken
                ])->post('https://flows.weni.ai/api/v2/' . 'flow_starts.json', $data);
            } catch (Throwable $th) {

                return response()->json(["message" => $th->getMessage()], 422);
            }

                // Determine if the status code is >= 200 and < 300...
            if ($response->successful()) {
                $this->controlSentTemplates($template_name);
                return response()->json();
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
                $messageError = "failed => " . $response;
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
                $messageError = "clientError => " . $response;
                $event_type = "E";
                $request->code = $response->getStatusCode();
                return LogCentralController::create($request, $messageError, $event_type);
                 /*****************FIM LOG CENTRAL*********************/
            }

                // Determine if the response has a 500 level status code...
            if ($response->serverError()) {
                    /*****************LOG CENTRAL*********************/
                    $messageError = "serverError => " . $response;
                    $event_type = "E";
                    $request->code = $response->getStatusCode();
                    return LogCentralController::create($request, $messageError, $event_type);
                    /*****************FIM LOG CENTRAL*********************/
            }

        }else{
            //Falha ao recuperar ou criar um contato na Weni
            return $weniContact;
        }
    }

    public function getWeniContact(Request $request)
    {
        $weniToken = "9cc68d4a3de1f6629ecbd887f61289308dbc0545";

        $formatedPhone = $this->removeNinthDigit($request->phone);

        try{

            $response = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Token '.$weniToken
            ])->GET('https://flows.weni.ai/api/v2/contacts.json?urn=whatsapp:55'.$formatedPhone);

        }catch(Throwable $th){

            return response()->json(["message" => $th->getMessage()], 422);

        }

          // return response()->json($response['id']);

        // Determine if the status code is >= 200 and < 300...
        if ($response->successful()) {

            if($response['results'] === []){
               return $this->createWeniContact($request);
            }else{
                //$check URNS is WhatsApp
                if(substr($response['results'][0]['urns'][0], 0, 8) == 'whatsapp'){
                    return $response;
                }else{
                    return $this->createWeniContact($request);
                }
            }

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
            $messageError = "failed => " . $response;
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
            $messageError = "clientError => " . $response;
            $event_type = "E";
            $request->code = $response->getStatusCode();
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }

        // Determine if the response has a 500 level status code...
        if ($response->serverError()) {
            /*****************LOG CENTRAL*********************/
            $messageError = "serverError => " . $response;
            $event_type = "E";
            $request->code = $response->getStatusCode();
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }
    }

    public function createWeniContact(Request $request)
    {
        $weniToken = "9cc68d4a3de1f6629ecbd887f61289308dbc0545";
        $user = USer::where('phone', $request->phone)->first();
        $phone = $this->removeNinthDigit($request->phone);

         if($user){
             $data = [
                 'name' => $user->name,
                 'language' => 'por',
                 'urns' => ["whatsapp:55".$phone],
                 'groups' => []
             ];
         }else{
            $data = [
                'name' => 'user',
                'language' => 'por',
                'urns' => ["whatsapp:55".$phone],
                'groups' => []
            ];
         }



       // return $this->getWeniContact($request);
        try {

            $response = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Token '.$weniToken
            ])->post('https://flows.weni.ai/api/v2/' . 'contacts.json', $data);
        } catch (Throwable $th) {

            return response()->json(["message" => $th->getMessage()], 422);
        }

        // Determine if the status code is >= 200 and < 300...
        if ($response->successful()) {

            return $response;
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
            $messageError = $response;
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
            $messageError = "clientError => " . $response;
            $event_type = "E";
            $request->code = $response->getStatusCode();
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }


        // Determine if the response has a 500 level status code...
        if ($response->serverError()) {
            /*****************LOG CENTRAL*********************/
            $messageError = "serverError => " . $response;
            $event_type = "E";
            $request->code = $response->getStatusCode();
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }
    }

    public function sendServiceReview($service_id)
    {
        $weniToken = "9cc68d4a3de1f6629ecbd887f61289308dbc0545";
        $service = Service::where('id', $service_id)->first();

        $user = User::where('id', $service->client_id)->first();

        $request = new Request();

        $request->merge(["phone" => $user->phone]);

        $weniContact = $this->getWeniContact($request);

        $template_name = 'send_service_review';

        if($weniContact->getStatusCode() == 200 || $weniContact->getStatusCode() == 201){

            if(isset($weniContact['results'][0]['uuid'])){

                $uuid = $weniContact['results'][0]['uuid'];
                $urns = $weniContact['results'][0]['urns'][0];

            }else{
                $uuid = $weniContact['uuid'];
                $urns = $weniContact['urns'][0];
            }

            $service_type = ServiceType::where('id', $service->service_type_id)->first();

            $data = [
                'flow' => '6db961c7-3c68-4b8d-8d51-c53ed028c4b0',
                'contacts' => [$uuid],
                'urns' => [$urns],
                'params' => [
                                'name' => $user->name,
                                'user_id' => $user->id,
                                'service_type' => $service_type->title,
                                'service_id' => $service->id
                            ]
                ];

            try {
                $response = Http::withoutVerifying()->withHeaders([
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Token '.$weniToken
                ])->post('https://flows.weni.ai/api/v2/' . 'flow_starts.json', $data);

            } catch (Throwable $th) {
                return response()->json(["message" => $th->getMessage()], 422);
            }

            // Determine if the status code is >= 200 and < 300...
            if ($response->successful()) {
                $this->controlSentTemplates($template_name);
                return response()->json();
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
                $messageError = "failed => " . $response;
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
                $messageError = "clientError => " . $response;
                $event_type = "E";
                $request->code = $response->getStatusCode();
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

            // Determine if the response has a 500 level status code...
            if ($response->serverError()) {
                /*****************LOG CENTRAL*********************/
                $messageError = "serverError => " . $response;
                $event_type = "E";
                $request->code = $response->getStatusCode();
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }
        }else{
            return $weniContact;
        }

    }

    public static function  removeNinthDigit($phone)
	{

		$novo = preg_replace("/[^0-9]/", '', $phone);
		//$chars = array("+"," ",".","/","-","*","(",")"); /* aqui indico os caracteres que desejo remover */
		//$novo = str_replace($chars, "", $numero); /* através de str_replace insiro somente os números invés de caracteres */

        $length = mb_strlen($novo,'UTF-8');

        if($length == 11){
                //verifica se tem o nono digito
                $checkifHaveNinthDigit = substr($novo, 2, 1);

                if ($checkifHaveNinthDigit == 9) { //verifica se tem o nono digito

                    $ddd_cliente = substr($novo, 0, 2);

                    $numero_cliente = substr($novo, 3);

                    $phone = $ddd_cliente . $numero_cliente;

                    return $phone;
                }
        }elseif($length > 11){
             //verifica se tem o 55 na frente
            $checkIfHaveInternationalCode = substr($novo, 0, 2);

            if ($checkIfHaveInternationalCode == 55) { //verifica se tem o 55 na frente

                $checkifHaveNinthDigit = substr($novo, 4, 1);

                if($checkifHaveNinthDigit == 9) { //verifica se tem o nono digito

                    $ddd_cliente = substr($novo, 2, 2);

                    $numero_cliente = substr($novo, 5);

                    $phone = $ddd_cliente . $numero_cliente;

                    return $phone;
                }
            }
        }

        return $phone;
    }

    public static function  checkIsURNSisWhatsApp($urns)
	{

        $checkIsURNSisWhatsApp = substr($urns, 0, 8);

        if($checkIsURNSisWhatsApp == 'whatsapp'){

        }

    }

    public static function  controlSentTemplates($template_name)
	{

        $referenceMonth = date('m') . '-' . date('Y');

        $tableControl = ControlSendTemplateWhats::where('template_name', $template_name)
                                            ->where('reference_month', $referenceMonth)
                                            ->first();

        if($tableControl){

            $tableControl->sent_counter = (int)$tableControl->sent_counter + 1;
            $tableControl->save();

        }else{

            $tableControl = New ControlSendTemplateWhats;
            $tableControl->template_name = $template_name;
            $tableControl->reference_month = $referenceMonth;
            $tableControl->sent_counter = 1;
            $tableControl->save();
        }
    }
}
