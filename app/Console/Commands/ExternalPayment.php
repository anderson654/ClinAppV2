<?php

namespace App\Console\Commands;

use App\Http\Controllers\AsaasController;
use App\Models\AsaasTransfer;
use App\Models\Log_central;
use App\Models\Payment;
use App\Models\PaymentAccount;
use App\Models\Professional;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ExternalPayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'externalPayment:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        // tem que ter uma conta asaas e uma conta para transferencia

        //code...
        Log::info("------------------------------------------------------------------");
        Log::info("iniciando cron external payment");
        $Professionals = Professional::whereHas('payment_account')
            ->whereHas('banck_account')
            ->with('payment_account', 'banck_account')->whereNull('deleted_at')->get();
        $count = 0;
        foreach ($Professionals as $professional) {
            $count++;
            $balanceObject = $this->checkBalance($professional->payment_account);
            if (isset($balanceObject->balance)) {
                Log::info("balanço: " . $balanceObject->balance . "conta: " . $professional->payment_account);
                if ($balanceObject->balance > 0 && $balanceObject->balance < 800) {
                    $this->transferTed($professional, $balanceObject->balance);
                }
            }
        }
        Log::info("Fim cron externalPayment");
        Log::info("Total de profissionais: " . $Professionals->count());
        Log::info("Total de profissionais percorridas: $count");
        Log::info("------------------------------------------------------------------");
    }

    public function checkBalance($paymentAccount)
    {
        $response = Http::withoutVerifying()->withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $paymentAccount->apiKey
        ])->post(config("routes.ASAAS") . 'finance/balance');
        return json_decode($response->getBody()->getContents());
    }

    public function transferTed($professional, $totalValue)
    {
        $banck_account = $professional->banck_account;
        $apiKeyProfessional = $professional->payment_account->apiKey;
        $accountName = $professional->payment_account->title;
        $asaasController = new AsaasController();
        $newRequest = new Request();

        $newRequest->merge([
            "name" => $accountName,
            "value" => $totalValue,
            "agencia" => $banck_account->agencia,
            "conta" => $banck_account->conta,
            "digito" => $banck_account->digito,
            "type_account" => $this->typeAccount($banck_account->type_account),
            "bank_cod_id" => $banck_account->bank_cod_id,
            "cpf" => $professional->cpf,
            "apiKey" => $apiKeyProfessional
        ]);

        $response = $asaasController->transferExternalAccount($newRequest);
        if ($response->status() == 200) {
            $paymentDebit = $this->createDebitProfessional($totalValue, $professional->user_id);
            $this->createNewTransaction($response->getContent(), $paymentDebit->id);
        } else {
            Log_central::Create([
                'user_id' => 5, //id cron
                'payment_id' => -1,
                'cod_source' => 5,
                'source' =>  "PaymentService => function transfersP2P / Source_requester => " . url()->current(),
                'event_type' => "E",
                'log' => 'ERRO => ' . "Erro ao tranferir para a conta da profissional $professional->name"
            ]);
        }
    }

    public function typeAccount(string $type)
    {
        return $type === "Conta poupança" ? "CONTA_POUPANCA" : "CONTA_CORRENTE";
    }
    //Ajustar
    public function createDebitProfessional($value, $userId)
    {
        $accountId = PaymentAccount::where('user_id', $userId)->first();

        if (!$accountId) {
            Log_central::Create([
                'user_id' => 5, //id cron
                'payment_id' => -1,
                'cod_source' => 5,
                'source' =>  "PaymentService => function transfersP2P / Source_requester => " . url()->current(),
                'event_type' => "E",
                'log' => 'ERRO => ' . "Não foi possivel encontrar a conta asaas(Class: externalPayment)(Method:createDebitProfessional): User:" . $userId
            ]);
        }

        $payment = new Payment();
        $payment->payment_status_id = 2;
        $payment->value = $value;
        $payment->payment_category = 4;
        $payment->user_id = $userId;
        $payment->payment_type = "D";
        $payment->payment_method_id = 3;
        $payment->payment_status_id = 4;
        $payment->payment_account_id = $accountId->id ?? 0;
        $payment->due_date = Carbon::now()->toDateString();

        if (!$payment->save()) {
            Log_central::Create([
                'user_id' => 5, //id cron
                'payment_id' => -1,
                'cod_source' => 5,
                'source' =>  "PaymentService => function transfersP2P / Source_requester => " . url()->current(),
                'event_type' => "E",
                'log' => 'ERRO => ' . "Erro ao criar linha de débito(Class: externalPayment)(Method:createDebitProfessional):"
            ]);
        }
        return $payment;
    }

    public function createNewTransaction($newTransfer, $paymentId)
    {
        $newTransfer = json_decode($newTransfer);
        try {
            //code...
            $asaasTransaction = new AsaasTransfer();
            $asaasTransaction->transfer_id = $newTransfer->id;
            $asaasTransaction->status = $newTransfer->status;
            $asaasTransaction->dateCreated = $newTransfer->dateCreated;
            $asaasTransaction->effectiveDate = $newTransfer->effectiveDate;
            $asaasTransaction->endToEndIdentifier = $newTransfer->endToEndIdentifier;
            $asaasTransaction->type = $newTransfer->type;
            $asaasTransaction->value = $newTransfer->value;
            $asaasTransaction->netValue = $newTransfer->netValue;
            $asaasTransaction->transferFee = $newTransfer->transferFee;
            $asaasTransaction->scheduleDate = $newTransfer->scheduleDate;
            $asaasTransaction->authorized = $newTransfer->authorized;
            $asaasTransaction->confirmedDate = $newTransfer->confirmedDate;
            $asaasTransaction->failReason = $newTransfer->failReason;
            $asaasTransaction->bank_code = $newTransfer->bankAccount->bank->code;
            $asaasTransaction->bank_name = $newTransfer->bankAccount->bank->name;
            $asaasTransaction->bank_accountName = $newTransfer->bankAccount->accountName;
            $asaasTransaction->bank_ownerName = $newTransfer->bankAccount->ownerName;
            $asaasTransaction->bank_cpfCnpj = $newTransfer->bankAccount->cpfCnpj;
            $asaasTransaction->bank_agency = $newTransfer->bankAccount->agency;
            $asaasTransaction->bank_agencyDigit = $newTransfer->bankAccount->agencyDigit;
            $asaasTransaction->bank_account = $newTransfer->bankAccount->account;
            $asaasTransaction->bank_accountDigit = $newTransfer->bankAccount->accountDigit;
            $asaasTransaction->bank_pixAddressKey = $newTransfer->bankAccount->pixAddressKey;
            $asaasTransaction->transactionReceiptUrl = $newTransfer->transactionReceiptUrl;
            $asaasTransaction->operationType = $newTransfer->operationType;
            $asaasTransaction->description = $newTransfer->description;
            $asaasTransaction->payment_id = $paymentId;
            $asaasTransaction->save();
            return response($asaasTransaction, 200);
        } catch (\Throwable $th) {
            //throw $th;
            Log_central::Create([
                'user_id' => 5, //id cron
                'payment_id' => $paymentId,
                'cod_source' => 5,
                'source' =>  "PaymentService => function transfersP2P / Source_requester => " . url()->current(),
                'event_type' => "E",
                'log' => 'ERRO => ' . "Erro ao criar linha de transferencia em asaas transfer(Class: externalPayment)(Method:createNewTransaction):" . $th->getMessage()
            ]);
            return response($th->getMessage(), 422);
        }
    }
}
