<?php

namespace App\Console\Commands\CreateMonthlyPayment\utils;

use App\Models\Asaas\Asaas as AsaasModel;
use App\Models\Asaas\AsaasBilling;
use App\Models\Asaas\AsaasCustomer;
use App\Models\Payment;
use App\Models\PaymentAccount;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class Asaas
{
    public static function createRequestCharge($user)
    {
        $request = new Request();
        try {
            //code...
            $request->merge([
                'user_id' => $user->id,
                'totalValue' => 21.00,
                'installmentCount' => 1,
                'description' => 'Mensalidade plataforma clin referente a data de ' . date('m') . '/' . date('Y'),
                'dueDate' => "2022-" . date('m') . "-15",
                'postalService' => false,
                'cod_source' => 0
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            throw new Exception("Error createRequestCharge: " . $th->getMessage());
        }
        return $request;
    }

    public static function validatorRequestCharge($request)
    {
        $validator  = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'totalValue' => 'required|numeric',
            'installmentCount' => 'int|max:12',
            'description' => 'string',
            'dueDate' => 'date',
            'postalService' => 'boolean',
            'cod_source' => 'int'
        ]);
        if ($validator->fails()) {
            throw new Exception("Error validatorRequestCharge: " . $validator->errors());
        }
    }

    public static function createPaymentAsaas($request, $user, $customerId)
    {
        try {
            //code...
            $asaasTokens = AsaasModel::tokens();
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $asaasTokens->access_token
            ])->post(config("routes.ASAAS") . 'payments', [
                "customer" => $customerId,
                "billingType" => "UNDEFINED",
                "installmentCount" => $request->installmentCount,
                "totalValue" => $request->totalValue,
                "dueDate" => $request->dueDate,
                "description" => $request->description,
                "externalReference" => 0,
                "postalService" => false
            ]);
            if ($response->successful()) {
                $payment = Asaas::createCreditFranchise($request, $user);
                Asaas::createAsaasBilling(json_decode($response->getBody()->getContents()), $payment);
            }
            // Determine if the status code is >= 400...
            if ($response->failed()) {
                $responseObject = json_decode($response->getBody()->getContents());
                throw new Exception("Erro createPaymentAsaas: " . $responseObject);
            }
        } catch (\Throwable $th) {
            //throw $th;
            throw new Exception("Error createPaymentAsaas: " . $th->getMessage());
        }
    }

    public function createCreditFranchise($request, $user)
    {
        try {
            //code...
            $franchiseId = 1;
            $franchiseAccount = PaymentAccount::where('franchise_id', $franchiseId)->first();
            $referenceMonth = date('m') . '-' . date('Y');
            $newPayment = new Payment();
            $newPayment->user_id = $user->id;
            $newPayment->value = $request->totalValue;
            $newPayment->payment_type = "C";
            $newPayment->payment_method_id = 0;
            $newPayment->payment_status_id = 1;
            $newPayment->payment_category = 1;
            $newPayment->due_date = $request->dueDate;
            $newPayment->payment_account_id = $franchiseAccount->id;
            $newPayment->franchise_id = $franchiseAccount->franchise_id;
            $newPayment->reference_month = $referenceMonth;
            $newPayment->order_id = 0;
        } catch (\Throwable $th) {
            //throw $th;
            throw new Exception("Erro createCreditFranchise :" . $th->getMessage());
        }
        if (!$newPayment->save()) {
            throw new Exception("Erro ao criar cérdito para o franquiado createCreditFranchise");
        }
        return $newPayment;
    }
    // -------------------------------------------------------------
    public static function createRequestCustomer($user)
    {
        $request = new Request();
        try {
            //code...
            $request->merge([
                'name' => $user->name,
                'email' => $user->email,
                'cpfCnpj' => $user->cpf,
                'externalReference' => $user->id,
                'notificationDisabled' => false
            ]);
        } catch (\Throwable $th) {
            throw new Exception("Error createRequestCustomer: " . $th->getMessage());
        }
        return $request;
    }
    public static function validateRequestCustomer($request)
    {
        $validator  = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string',
            'cpfCnpj' => 'required|string',
            'externalReference' => 'required|int',
            'notificationDisabled' => 'required|boolean'
        ]);
        if ($validator->fails()) {
            throw new Exception("Error validateRequestCustomer: " . $validator->errors());
        }
    }
    public static function createNewCustomer($request)
    {
        //temporario para pegar o franchise clin
        try {
            //code...
            $asaasTokens = AsaasModel::tokens();
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $asaasTokens->access_token
            ])->post(
                config("routes.ASAAS") . 'customers',
                $request->all()
            );

            if ($response->successful()) {
                $responseObject = json_decode($response->getBody()->getContents());
                Asaas::createAssasCustomerInTable($responseObject);
                return $responseObject;
            }
            // Determine if the status code is >= 400...
            if ($response->failed()) {
                $responseObject = json_decode($response->getBody()->getContents());
                throw new Exception("Erro createNewCustomer: " . $responseObject);
            }
        } catch (\Throwable $th) {
            //throw $th;
            throw new Exception("Error createNewCustomer: " . $th->getMessage());
        }
    }

    public function createAssasCustomerInTable($responseObject)
    {
        $userId = (int)$responseObject->externalReference;
        $asaasCustomer = new AsaasCustomer();
        $asaasCustomer->user_id = $userId;
        $asaasCustomer->customer_id = $responseObject->id;
        if (!$asaasCustomer->save()) {
            throw new Exception("Falha ao salvar customer na tabela createAssasCustomerInTable");
        }
    }

    //cria na tabela asaas billings um registro

    public function createAsaasBilling($reponseAsaas, $payment)
    {
        try {
            //code...
            $asaasBilling = new AsaasBilling();
            $asaasBilling->asaasPaymentId = $reponseAsaas->id;
            $asaasBilling->dateCreated = $reponseAsaas->dateCreated;
            $asaasBilling->asaasCustomerId = $reponseAsaas->customer;
            $asaasBilling->paymentLink = $reponseAsaas->paymentLink;
            $asaasBilling->asaasSubscriptionId = NULL;
            $asaasBilling->installment = $reponseAsaas->installment;
            $asaasBilling->dueDate = $reponseAsaas->originalDueDate;
            $asaasBilling->valueBilling = $reponseAsaas->value;
            $asaasBilling->netValue = $reponseAsaas->netValue;
            $asaasBilling->discountValue = $reponseAsaas->discount->value;
            $asaasBilling->discountType = NULL;
            $asaasBilling->interestValue = NULL;
            $asaasBilling->fineValue = $reponseAsaas->fine->value;
            $asaasBilling->billingType = NULL;
            $asaasBilling->status = $reponseAsaas->status;
            $asaasBilling->pixTransaction = NULL;
            $asaasBilling->description = $reponseAsaas->description;
            $asaasBilling->externalReference = $reponseAsaas->externalReference;
            $asaasBilling->originalDueDate = $reponseAsaas->originalDueDate;
            $asaasBilling->originalValue = $reponseAsaas->originalValue;
            $asaasBilling->confirmedDate = NULL;
            $asaasBilling->paymentDate = NULL;
            $asaasBilling->clientPaymentDate = NULL;
            $asaasBilling->invoiceUrl = $reponseAsaas->invoiceUrl;
            $asaasBilling->bankSlipUrl = $reponseAsaas->bankSlipUrl;
            $asaasBilling->invoiceNumber = $reponseAsaas->invoiceNumber;
            $asaasBilling->deleted = $reponseAsaas->deleted;
            $asaasBilling->postalService = NULL;
            $asaasBilling->anticipated = $reponseAsaas->anticipated;
            $asaasBilling->splitWalletId = NULL;
            $asaasBilling->splitFixedValue = NULL;
            $asaasBilling->splitPercentualValue = NULL;
            $asaasBilling->chargebackStatus = NULL;
            $asaasBilling->chargebackReason = NULL;
            $asaasBilling->refundsDateCreated = NULL;
            $asaasBilling->refundsStatus = NULL;
            $asaasBilling->refundsValue = NULL;
            $asaasBilling->refundsDescription = NULL;
            $asaasBilling->refundsTransactionReceiptUrl = NULL;
            $asaasBilling->payment_id = $payment->id;
            $asaasBilling->identificationField = $reponseAsaas->identificationField;
        } catch (\Throwable $th) {
            //throw $th;
            throw new Exception("Error createAsaasBilling:" . $th->getMessage());
        }
        if (!$asaasBilling->save()) {
            throw new Exception("Falha ao salvar registro de pagamento em Asaas_billings.");
        }
    }
}
