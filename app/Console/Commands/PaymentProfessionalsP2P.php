<?php

namespace App\Console\Commands;

use App\Http\Controllers\AsaasController;
use App\Http\Controllers\Finance\PaymentsController;
use App\Models\Asaas\Asaas;
use App\Models\Log_central;
use App\Models\Payment;
use App\Models\PaymentAccount;
use App\Models\ServiceSlot;
use App\Models\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PaymentProfessionalsP2P extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paymentProfessionalsP2P:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Transferencia P2P para as profissionais';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //Pega todos os payments débitos
        Log::info("--------------------Iniciando cron P2P");
        $debitPayments = Payment::where('payment_type', "D")
            ->whereDate('due_date', Carbon::now()->toDateString())
            ->where('payment_status_id', 1)
            ->where('payment_category', 6)
            ->where('payment_method_id', 5)
            ->get();
        //dd($debitPayments->count());
        if ($debitPayments->count() == 0) {
            Storage::put("PaymentProfessionalsP2P/" . "Falha no cron" . rand(1, 500000) . ".txt", "Nenhum débito encontrado para realizar transferencias P2P");
            Log_central::Create([
                'user_id' => 5,
                'cod_source' => 5,
                'source' =>  "Controller PaymentProfessionalsP2P => function transfersP2P / Source_requester => " . url()->current(),
                'event_type' => "C",
                'log'      => 'ERRO => ' . "Nenhum débito encontrado para realizar transferencias P2P",
            ]);
            Log::info("Nenhum débito encontrado para realizar pagamento");
        }

        foreach ($debitPayments as $payment) {
            //verifica se a profissional esta congelada
            $verifyFrozenProfessional = $this->frozenProfessional($payment->user_id);
            if ($verifyFrozenProfessional) {
                $this->cronP2P($payment);
            } else {
                $payment->payment_status_id = 10;
                $payment->save();
                Log::info("Profissional não recebeu o pagamento porque esta congelada userProfessionalId: $payment->user_id");
            }
        }
        Log::info("--------------------Fim cron P2P");
    }

    public function cronP2P($payment)
    {
        try {
            //code...
            $payment = $payment->makeHidden(['subscription_id', 'payment_date', 'link_pagamento', 'code_boletofacil', 'link_boleto', 'deleted_at', 'updated_at', 'due_date', 'aproved', 'fee', 'paymentToken', 'payment_amount', 'payment_method_id', 'service_id', 'barcodeNumber', 'checkoutUrl', 'statusJuno', 'chargeId', 'transactionId', 'junoPaymentsId', 'franchising_fee', 'payment_fee', 'invoiceNumber', 'services', 'payment_gateway_id'])->toArray();
            $paymentAccountProfessional = PaymentAccount::where('user_id', $payment['user_id'])->first();
            $asaasTokens = Asaas::tokens();

            $request = new Request();
            $request->merge($payment);
            $request->merge(['walletId' => $paymentAccountProfessional->walletId, 'access_token' => $asaasTokens->access_token]);
            $newTransferP2P = new AsaasController();
            //realiza o pagamento da faxina
            $response = $newTransferP2P->transfersP2P($request);
            if ($response->getStatusCode() == 200) {
                $payment = Payment::find($payment['id']);
                $payment->payment_status_id = 2;
                $payment->save();
                //cria o crédito referente ao pagamento da profissional
                $this->createCreditPaymentProfessional($payment);
                //verifica se tem multa e cria o crédito
                $this->debtsProfessionalToFranchise($payment);
                //verifica se tem algum crédito e cria o crédito referente ao pagamento
                $this->creditProfessional($payment);
            }
            return response('Transferencia realizada com sucesso.', 200);
        } catch (\Throwable $th) {
            Log::info($th);
            Storage::put("PaymentProfessionalsP2P/" . "Falha no cron" . ".txt", $th->getMessage());
            Log_central::Create([
                'user_id' => 5,
                'cod_source' => 5,
                'source' =>  "Controller PaymentProfessionalsP2P => function transfersP2P / Source_requester => " . url()->current(),
                'event_type' => "C",
                'log'      => 'ERRO => ' . $th,
            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response('Erro ao realizar transferencia p2p' . $th->getMessage(), 422);
        }
    }

    public function createCreditPaymentProfessional($payment)
    {

        $paymentAccountProfessional = PaymentAccount::where('user_id', $payment['user_id'])->first();
        $request = new Request();
        $request->merge([
            'value' => $payment['value'],
            'payment_category' => 6,
            'payment_status_id' => 2,
            'payment_type' => 'C',
            'payment_method_id' => 5,
            'payment_account_id' => $paymentAccountProfessional->id, //da clin
            'user_id' => $payment['user_id'],
            'service_slot_id' => $payment['service_slot_id'],
            'due_date' => 0
        ]);
        PaymentsController::createNewPayment($request);
    }

    public function checkArrayAttributes($array)
    {
        $checkArray = true;
        foreach ($array as $key => $value) {
            //verifica se todos os dados estão preenchidos
            if (!$value) {
                $checkArray = "O valor da chave $key está vazia na tabela payments";
                break;
            }
        }
        return $checkArray;
    }


    public function frozenProfessional($professionalId)
    {
        $userProfessional = User::find($professionalId);
        return $userProfessional->status == 1 ? true : false;
    }


    public function debtsProfessionalToFranchise($payment)
    {
        //pega todos os créditos que tem multa taxa ou reenbolso (obs: pegar o slot tamben)
        $creditPayments = Payment::where('user_id', $payment['user_id'])
            ->where('payment_status_id', 1)
            ->whereIn('payment_category', [8, 9, 10])
            ->where('payment_type', 'D');
        $apiToken = PaymentAccount::where('user_id', $payment['user_id'])->first()->apiKey;
        if ($creditPayments->exists()) {
            //se existir fazer uma transferencia p2p para a clin
            //fazer um foreache aqui
            $creditPayments = $creditPayments->get();

            $asaasWalletId = Asaas::walletId(1);
            foreach ($creditPayments as $payment) {
                # code...
                $request = new Request();
                $request->merge([
                    "value" => $payment->value,
                    "walletId" => $asaasWalletId->walletId, //local
                    "access_token" => $apiToken
                ]);
                $newTransferP2P = new AsaasController();
                $response = $newTransferP2P->transfersP2P($request);
                if ($response->getStatusCode() == 200) {
                    $payment->payment_status_id = 2;
                    $payment->save();
                    $this->createNewCredit($payment);
                }
            }
        }
    }
    public function createNewCredit($payment)
    {
        //credito para quem franchise
        // $paymentAccountProfessional = PaymentAccount::where('user_id', $payment['user_id'])->first();
        $request = new Request();
        $request->merge([
            'value' => $payment['value'],
            'payment_category' => isset($payment->payment_category) ? $payment->payment_category : 8,
            'payment_status_id' => 2,
            'payment_type' => 'C',
            'payment_method_id' => 5,
            'payment_account_id' => 1,
            'user_id' => $payment['user_id'],
            'service_slot_id' => $payment['service_slot_id'],
            'due_date' => 0
        ]);
        PaymentsController::createNewPayment($request);
        Log::info('desconto aplicado');
    }

    public function creditProfessional($payment)
    {
        //pegar a conta de quem esta no slot
        $walletId = $payment->slot_payment->professionalAsaasAccount->walletId;
        $asaasTokens = Asaas::tokens();

        $debitFranchiseToProfessional = Payment::where('payment_type', "D")
            ->where('payment_status_id', 1)
            ->where('payment_category', 11)
            ->where('payment_method_id', 5)
            ->where('service_slot_id', $payment->service_slot_id)
            ->get();
        foreach ($debitFranchiseToProfessional as $payment) {
            # code...
            $request = new Request();
            $request->merge([
                "value" => $payment->value,
                "walletId" => $walletId,
                "access_token" => $asaasTokens->access_token
            ]);
            $newTransferP2P = new AsaasController();
            $response = $newTransferP2P->transfersP2P($request);
            if ($response->getStatusCode() == 200) {
                $payment->payment_status_id = 2;
                $payment->save();
                $this->createNewCreditProfessional($payment);
            }
        }
        return $debitFranchiseToProfessional;
    }

    //
    public function createNewCreditProfessional($payment)
    {
        $request = new Request();
        $request->merge([
            'value' => $payment['value'],
            'payment_category' => isset($payment->payment_category) ? $payment->payment_category : 8,
            'payment_status_id' => 2,
            'payment_type' => 'C',
            'payment_method_id' => isset($payment->payment_method_id) ? $payment->payment_method_id : 0,
            'payment_account_id' => isset($payment->slot_payment->professionalAsaasAccount->id) ? $payment->slot_payment->professionalAsaasAccount->id : 0,
            'user_id' => $payment->slot_payment->user_id,
            'service_slot_id' => $payment['service_slot_id'],
            'due_date' => 0
        ]);
        PaymentsController::createNewPayment($request);
        Log::info('desconto aplicado');
    }
}
