<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Juno_token;
use Illuminate\Support\Carbon;
use App\Models\Log_central;
use App\Http\Controllers\LogCentralController;
use App\Models\Order;
use App\Models\Service;
use App\Http\Controllers\Finance\CreditCardsController;
use App\Models\Client;
use App\Http\Controllers\Finance\PaymentsController;
use App\Models\CreditCardDetail;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Jetimob\Juno\Facades\Juno;
use Jetimob\Juno\Lib\Http\Charge\ChargeConsultRequest;
use Jetimob\Juno\Lib\Http\Charge\ChargeCreationRequest;
use Jetimob\Juno\Lib\Http\Charge\ChargeCreationResponse;
use Jetimob\Juno\Lib\Model\Billing;
use Jetimob\Juno\Lib\Model\Charge;
use Jetimob\Juno\tests\TestCase;
use Jetimob\Juno\Util\Console;
use Illuminate\Support\Facades\Log;
use Jetimob\Juno\JunoServiceProvider;
use Jetimob\Juno\Lib\Http\ErrorResponse;
use Jetimob\Juno\Lib\Http\Response;
use Jetimob\Juno\Lib\Model\ErrorDetail;

class ChargeController  extends TestCase
{

    public static function createCharge(Request $request, $dueDate, $totalValue){
        $request->source =  request()->route()->getActionName();//Recupera a source da operação para utilização na log central.

        $client         = Client    ::where('user_id',  $request['user_id']) ->first();
        $charge         = self::createChargeJuno($request, $dueDate, $totalValue);
        $billing        = self::createBillingJuno($client);

        /** @var ChargeCreationResponse $response */
        $resourceToken  = Juno_token::where('version', 2)->value('token_privado');
        $chargeResponse =  Juno::request(new ChargeCreationRequest($charge, $billing), $resourceToken);

        if ($chargeResponse->failed()) {
            /** @var ErrorDetail $detail */
            foreach ($chargeResponse->getDetails() as $detail) {
                $messageError = $detail->getMessage() . '- Error Code ' . $detail->getErrorCode() . ' - Error Field ' .  $detail->getField();
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
            }
        }

        if ($chargeResponse->succeeded()) {

            /*****************LOG CENTRAL*********************/
            $messageLog = 'Criou a cobrança para a Order_id:' . $request['order_id'];
            $event_type = "C";
            LogCentralController::create($request, $messageLog, $event_type);
            /*****************LOG CENTRAL*********************/

            return $chargeResponse;
        }
     }

    private static function createBillingJuno($client){


        $billing = new Billing();
        $billing->name = $client->name;
        $billing->document = $client->cpf;
        $billing->phone = $client->contact->phone;
        $billing->email = $client->user->email;
        $billing->notify = true;

        return $billing;

    }

    private static function createChargeJuno(Request $request, $dueDate, $totalValue){

        $year = Carbon::parse($dueDate)->format('Y');
        $month = Carbon::parse($dueDate)->format('m');
        $day = Carbon::parse($dueDate)->format('d');

        $charge = new Charge();
        $charge->description    = $request['description_payment'];
        $charge->amount         = $totalValue;
        $charge->paymentTypes   = ['BOLETO', 'CREDIT_CARD'];
        $charge->dueDate        = Juno::formatDate($year, $month, $day );

        $charge->maxOverdueDays = 10;
        $charge->fine           = 5;
        $charge->interest       = 1;

        return $charge;

    }

    protected function debugFailedResponse(Response $response)
    {
        if (!($response instanceof ErrorResponse)) {
            return;
        }


    }

}
