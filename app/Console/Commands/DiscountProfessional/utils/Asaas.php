<?php
namespace App\Console\Commands\DiscountProfessional\utils;

use App\Models\Asaas\Asaas as ModelAsaas;
use App\Models\p2pTransfer;
use App\Models\Payment;
use App\Models\ServiceSlot;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Validator;

Class Asaas{
    public static function createRequestP2P($user, $payment){
        $request = new Request();
        $asaasAccount = ModelAsaas::walletId(1);
        try {
            //code...
            $request->merge([
                'access_token' => $user->payment_account->apiKey,
                'value' => $payment->value,
                'walletId' => $asaasAccount->walletId,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            throw new Exception("Error createRequestP2P: ".$th->getMessage());
        }
        return $request;
    }

    public static function validatorRequestP2P($request){
        $validator  = Validator::make($request->all(), [
            'access_token' => 'required|string',
            'value' => 'required|numeric',
            'walletId' => 'required|string'
        ]);
        if ($validator->fails()) {
            throw new Exception("Error validatorRequestP2P: ". $validator->errors());
        }
    }

    public static function transferP2PAsaas($request, $payment, $user){
        $response = Http::withoutVerifying()->withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $request->access_token
            ])->post(config("routes.ASAAS") . 'transfers', [
                "value" => $request->value,
                "walletId" => $request->walletId
        ]);
       
        if ($response->successful()) {
            $responseObject = json_decode($response->getBody()->getContents());
            $asaas = new Asaas();
            $asaas->updateCredit($payment);
            $paymentDebit = $asaas->createNewDebit($payment, $user);
            $asaas->createAsaasRegister($payment,$paymentDebit,$responseObject);
            return $responseObject;
        }
        // Determine if the status code is >= 400...
        if ($response->failed()) {
            $responseObject = json_decode($response->getBody());
            throw new Exception("Erro transferP2PAsaas: ". json_encode($responseObject) . " Code:".$response->getStatusCode());
        }
        
    }

    //----------------------------------------------
    public function updateCredit($payment){
        $payment->payment_status_id = 2;
        if(!$payment->save()){
            throw new Exception("Erro updateCredit: Não foi possivel atualizar o status do pagamento por favor atualize manualmente na tabela.");
        }
    }
    public function createNewDebit($payment, $user){

        try {
            //code...
            $payment = Payment::create([
                'user_id' => $payment->user_id,
                'value' => $payment->value,
                'payment_status_id' => 2,
                'subscription_id' => isset($payment->subscription_id) ? $payment->subscription_id : null,
                'payment_category' =>  isset($payment->payment_category) ? $payment->payment_category : null,
                'order_id' => isset($payment->order_id) ? $payment->order_id : null,
                'payment_type' => "D",
                'reference_month' => Carbon::now()->format('m-Y'),
                'aproved' => null,
                'payment_method_id' => isset($payment->payment_method_id) ? $payment->payment_method_id : null,
                'franchising_fee' => isset($payment->franchising_fee) ? $payment->franchising_fee : null,
                'service_slot_id' => isset($payment->service_slot_id) ? $payment->service_slot_id : null,
                'payment_account_id' => isset($user->payment_account->id) ? $user->payment_account->id : null,
                'due_date' => Carbon::now()->toDateString(),
                'franchise_id' => 1,
                'service_id' => isset($payment->service_id) ? $payment->service_id : null
            ]);
            return $payment;
        } catch (\Throwable $th) {
            //throw $th;
            throw new Exception("Error createNewDebit erro ao gerar o débito:" . $th->getMessage());
        }
    }
    //--------------------------------------

    public function createAsaasRegister($paymentCredit,$paymentDebit,$responseP2P){
        try {
            //code...
            if($paymentCredit->service_slot_id){
                $serviceSlot = ServiceSlot::find($paymentCredit->service_slot_id);
                if(isset($serviceSlot->service_id)){
                    $serviceId = $serviceSlot->service_id;
                }
            }
            $p2pTransfers = new p2pTransfer();
            $p2pTransfers->paymentD_id = $paymentDebit->id;
            $p2pTransfers->paymentC_id = $paymentCredit->id;
            $p2pTransfers->object = $responseP2P->object;
            $p2pTransfers->id_asaas = $responseP2P->id;
            $p2pTransfers->dateCreated = $responseP2P->dateCreated;
            $p2pTransfers->status = $responseP2P->status;
            $p2pTransfers->effectiveDate = $responseP2P->effectiveDate;
            $p2pTransfers->endToEndIdentifier = $responseP2P->endToEndIdentifier;
            $p2pTransfers->type = $responseP2P->type;
            $p2pTransfers->transferFee = $responseP2P->transferFee;
            $p2pTransfers->scheduleDate = $responseP2P->scheduleDate;
            $p2pTransfers->authorized = $responseP2P->authorized;
            $p2pTransfers->walletId = $responseP2P->walletId;
            $p2pTransfers->name = $responseP2P->account->name;
            $p2pTransfers->cpfCnpj = $responseP2P->account->cpfCnpj;
            $p2pTransfers->agency = $responseP2P->account->agency;
            $p2pTransfers->account = $responseP2P->account->account;
            $p2pTransfers->accountDigit = $responseP2P->account->accountDigit;
            $p2pTransfers->transactionReceiptUrl = $responseP2P->transactionReceiptUrl;
            $p2pTransfers->operationType = $responseP2P->operationType;
            $p2pTransfers->description = "Transferência referente a pagamento de serviço.";
            $p2pTransfers->internalServiceId = $serviceId ?? 0;
    
            $p2pTransfers->save();
        } catch (\Throwable $th) {
            //throw $th;
            throw new Exception("Error createAsaasRegister: " . $th->getMessage());
        }
    }

}