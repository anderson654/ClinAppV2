<?php

namespace App\Http\Controllers\Asaas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Asaas\CustomerController;
use App\Models\Client;
use App\Models\Payment;
use Illuminate\Support\Facades\Http;
use App\Models\Asaas\Asaas;
use App\Http\Controllers\LogCentralController;
use App\Models\Asaas\AsaasBilling;
use App\Models\CorporateClient;
use App\Models\Juno_token;
use App\Models\Professional;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class AsaasBillingController extends Controller
{
    public static function create(Request $request)
    {
        if (!isset($request->discount)) {
            $request->discount = 0;
        }


        //SE O METODO DE PAGAMENTO FOR 1 IGUAL CARTÃO DE CRÉDITO;
        if($request->payment_method_id == 1){
            $request->access_token = Juno_token::find(5)->token_privado;
            $request->franchise_id = 3;
        }
        Log::info("Acesso ao token ".$request->access_token);
        Log::info("Acesso ao token ".$request->access_token);
        Log::info("Acesso ao token ".$request->access_token);
        Log::info("Acesso ao token ".$request->access_token);
        Log::info("Acesso ao token ".$request->access_token);
        Log::info("Acesso ao token ".$request->access_token);
        Log::info("Acesso ao token ".$request->access_token);

        $client = Client::where('user_id', $request->user_id)->first();

        if (!$client) {
            $client = CorporateClient::where("user_id", $request->user_id)->first();
        }

        if (!$client) {
            $client = Professional::where("user_id", $request->user_id)->first();
        }

        try {
            $asaasCustomer = CustomerController::getAsaasCustomer($request);
        } catch (Throwable $th) {
            return response()->json([
                "message" => $th->getMessage(),
                "source" => "AsaasBillingController@create"
            ], 422);
        }

        if($request->payment_method_id != 1){
            $asaasTokens = Asaas::tokens($request->franchise_id);
        }

        //se for cartão de crédito ir para outra conta;
        

        $data = [
            'customer' => $asaasCustomer->customer_id,
            'billingType' => $request->billingType ? $request->billingType : 'UNDEFINED',
            'dueDate' => Carbon::now()->addDays($request->dueDate)->format("Y-m-d"),
            'value' => $request->totalValue,
            'description' => isset($request->description_payment) ? $request->description_payment : null,
            'externalReference' => $client->user_id ? $client->user_id : '',
            'discount' => [
                'value' => $request->discount,
                'dueDateLimitDays' => 2
            ],
            'fine' => [
                'value' => 1
            ],
            'interest' => [
                'value' => 2
            ],
            'postalService' => false,

        ];

        Log::info(json_encode($data));

        if (isset($request->split)) {
            $data = array_merge($data, ["split" => $request->split]);
        }

        if (isset($request->creditCardToken)) {
            $creditCardToken = ["creditCardToken" => $request->creditCardToken];
            $data = array_merge($data, $creditCardToken);
        }


        try {
            $response = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $request->access_token ?? $asaasTokens->access_token


            ])->post(config("routes.ASAAS") . 'payments', $data);
        } catch (Throwable $th) {
            return response()->json(["message" => $th->getMessage()], 422);
        }
        if ($response->successful()) {
            $asaasBilling = Self::updateBilling($request, $response);

            $asaasBilling->link_boleto = $asaasBilling->invoiceUrl;
            $asaasBilling->barcodeNumber = $asaasBilling->identificationField ?? "";

            return $asaasBilling;
        }
        // Determine if the status code is >= 400...
        if ($response->failed()) {
            /*****************LOG CENTRAL*********************/
            $messageError = "failed => " . $response['errors'][0]['code'] . " - " . $response['errors'][0]['description'];
            $event_type = "E";
            $request->code = $response->getStatusCode();
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }
        // Determine if the response has a 400 level status code...
        if ($response->clientError()) {
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
    }

    public static function deleteBilling($request)
    {
        try {
            $asaasBilling = AsaasBilling::where('asaasPaymentId', $request['payment']['id'])->first();
            $paymentToDelete = Payment::where("id", $asaasBilling->payment_id)->delete();

            $asaasBilling->update([
                "status" => "PAYMENT_DELETED"
            ]);
        } catch (\Exception $e) {
            throw new \Error("WebHook Asaas - Falha ao atualizar status de billing $e");
        }
    }

    public static function updateBilling(Request $request, $response)
    {
        $asaasBilling =  AsaasBilling::where('asaasPaymentId', $response['id'])->first();

        if (!$asaasBilling) {
            $asaasBilling = new AsaasBilling;
        }

        $asaasBilling->payment_id = $request->payment_id;

        $asaasBilling->identificationField          = $response["identificationField"] ?? null;

        $asaasBilling->asaasPaymentId               = isset($response['id'])                               ? $response['id']                               : NULL;

        $asaasBilling->dateCreated                  = isset($response['dateCreated'])                      ? $response['dateCreated']                      : NULL;
        $asaasBilling->asaasCustomerId              = isset($response['customer'])                         ? $response['customer']                         : NULL;
        $asaasBilling->asaasSubscriptionId          = isset($response['subscription'])                     ? $response['subscription']                     : NULL;
        $asaasBilling->installment                  = isset($response['installment'])                      ? $response['installment']                      : NULL;
        $asaasBilling->dueDate                      = isset($response['dueDate'])                          ? $response['dueDate']                          : NULL;
        $asaasBilling->valueBilling                 = isset($response['value'])                            ? $response['value']                            : NULL;
        $asaasBilling->netValue                     = isset($response['netValue'])                         ? $response['netValue']                         : NULL;
        $asaasBilling->discountValue                = isset($response['discount']['value'])                ? $response['discount']['value']                : NULL;
        $asaasBilling->discountType                 = isset($response['discount']['type'])                 ? $response['discount']['type']                 : NULL;
        $asaasBilling->interestValue                = isset($response['interest']['value'])                ? $response['interest']['value']                : NULL;
        $asaasBilling->fineValue                    = isset($response['fine']['value'])                    ? $response['fine']['value']                    : NULL;
        $asaasBilling->billingType                  = isset($response['billingType'])                      ? $response['billingType']                      : NULL;
        $asaasBilling->status                       = isset($response['status'])                           ? $response['status']                           : NULL;
        $asaasBilling->pixTransaction               = isset($response['pixTransaction'])                   ? $response['pixTransaction']                   : NULL;
        $asaasBilling->description                  = isset($response['description'])                      ? $response['description']                      : NULL;
        $asaasBilling->externalReference            = isset($response['externalReference'])                ? $response['externalReference']                : NULL;
        $asaasBilling->originalDueDate              = isset($response['originalDueDate'])                  ? $response['originalDueDate']                  : NULL;
        $asaasBilling->originalValue                = isset($response['originalValue'])                    ? $response['originalValue']                    : NULL;
        $asaasBilling->interestValue                = isset($response['interestValue'])                    ? $response['interestValue']                    : NULL;
        $asaasBilling->confirmedDate                = isset($response['confirmedDate'])                    ? $response['confirmedDate']                    : NULL;
        $asaasBilling->paymentDate                  = isset($response['paymentDate'])                      ? $response['paymentDate']                      : NULL;
        $asaasBilling->clientPaymentDate            = isset($response['clientPaymentDate'])                ? $response['clientPaymentDate']                : NULL;
        $asaasBilling->invoiceUrl                   = isset($response['invoiceUrl'])                       ? $response['invoiceUrl']                       : NULL;
        $asaasBilling->bankSlipUrl                  = isset($response['bankSlipUrl'])                      ? $response['bankSlipUrl']                      : NULL;
        $asaasBilling->transactionReceiptUrl        = isset($response['transactionReceiptUrl'])            ? $response['transactionReceiptUrl']            : NULL;
        $asaasBilling->invoiceNumber                = isset($response['invoiceNumber'])                    ? $response['invoiceNumber']                    : NULL;
        $asaasBilling->deleted                      = isset($response['deleted'])                          ? $response['deleted']                          : NULL;
        $asaasBilling->postalService                = isset($response['postalService'])                    ? $response['postalService']                    : NULL;
        $asaasBilling->anticipated                  = isset($response['anticipated'])                      ? $response['anticipated']                      : NULL;
        $asaasBilling->splitWalletId                = isset($response['split']['walletId'])                ? $response['split']['walletId']                : NULL;
        $asaasBilling->splitFixedValue              = isset($response['split']['percentualValue'])         ? $response['split']['percentualValue']         : NULL;
        $asaasBilling->splitPercentualValue         = isset($response['split']['fixedValue'])              ? $response['split']['fixedValue']              : NULL;
        $asaasBilling->chargebackStatus             = isset($response['chargeback']['status'])             ? $response['chargeback']['status']             : NULL;
        $asaasBilling->chargebackReason             = isset($response['chargeback']['reason'])             ? $response['chargeback']['reason']             : NULL;
        $asaasBilling->refundsDateCreated           = isset($response['refunds']['dateCreated'])           ? $response['refunds']['dateCreated']           : NULL;
        $asaasBilling->refundsStatus                = isset($response['refunds']['status'])                ? $response['refunds']['status']                : NULL;
        $asaasBilling->refundsValue                 = isset($response['refunds']['value'])                 ? $response['refunds']['value']                 : NULL;
        $asaasBilling->refundsDescription           = isset($response['refunds']['description'])           ? $response['refunds']['description']           : NULL;
        $asaasBilling->refundsTransactionReceiptUrl = isset($response['refunds']['transactionReceiptUrl']) ? $response['refunds']['transactionReceiptUrl'] : NULL;
        $asaasBilling->anticipable                  = isset($response['anticipable'])                      ? $response['anticipable']                      : NULL;
        $asaasBilling->creditDate                   = isset($response['creditDate'])                       ? $response['creditDate']                       : NULL;
        $asaasBilling->estimatedCreditDate          = isset($response['estimatedCreditDate'])              ? $response['estimatedCreditDate']              : NULL;
        $asaasBilling->lastInvoiceViewedDate        = isset($response['lastInvoiceViewedDate'])  ? Carbon::parse($response['lastInvoiceViewedDate'])->format('Y-m-d H:i:s')   : null;
        $asaasBilling->lastBankSlipViewedDate       = isset($response['lastBankSlipViewedDate']) ? Carbon::parse($response['lastBankSlipViewedDate'])->format('Y-m-d H:i:s')  : null;

        $asaasBilling->save();

        return $asaasBilling;
    }

    public static function aproveAsaasBilling($newAsaasBilling)
    {
        $asaasBilling = AsaasBilling::where('asaasPaymentId', $newAsaasBilling->payment['id'])->first();
        if (!$asaasBilling) {
            return null;
        }
        $asaasBilling->status = $newAsaasBilling->payment['status'];
        $asaasBilling->save();
        return $asaasBilling;
    }
}
