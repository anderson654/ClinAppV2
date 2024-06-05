<?php

namespace App\Console\Commands;

use App\Http\Controllers\AsaasController;
use App\Http\Controllers\Finance\PaymentsController;
use App\Models\Asaas\Asaas;
use App\Models\Log_central;
use App\Models\p2pTransfer;
use App\Models\Payment;
use App\Models\PaymentAccount;
use App\Models\Service;
use App\Models\ServiceSlot;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PaymentService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paymentService:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este cron realiza a tranferencia P2P asaas para a conta do(a) profissional (PAGAMENTO DE SERVIÇO/CRÉDITO)';

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
        $repaseDeServico = 6;
        $credito = 11;
        Log::info("--------------------Iniciando cron de pagamento de serviço");
        $debitPayments = Payment::where('payment_type', "D")
            ->whereDate('due_date', Carbon::now()->toDateString())
            ->where('payment_status_id', 1)
            ->whereIn('payment_category', [$repaseDeServico, $credito])
            ->where('payment_method_id', 5)
            ->get();
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
        //para quem quer tranferir
        try {
            //code...
            $asaasTokens = Asaas::tokens($payment->franchise_id);
            $walletId = PaymentAccount::where('user_id', $payment['user_id'])->first()->walletId;

            $request = new Request();
            $payment = $payment->toArray();
            $request->merge($payment);
            $request->merge(['walletId' => $walletId, 'access_token' => $asaasTokens->access_token]);
            $newTransferP2P = new AsaasController();
            //realiza o pagamento da faxina
            $response = $newTransferP2P->transfersP2P($request);

            if ($response->getStatusCode() == 200) {
                $payment = Payment::find($payment['id']);
                $payment->payment_status_id = 2;
                $payment->save();
                //cria o crédito referente ao pagamento da profissional
                $dueDate = Carbon::now()->toDateString();
                $paymentCredit = $this->createCreditPaymentProfessional($payment,$dueDate);
                Log::info('1, errro');
                $this->createAsaasRegister($paymentCredit, $payment, $response);
                Log::info('2, errro');
                //aplica os descontos caso exista
                Artisan::call('discountProfessional:cron');
            } else {
                //aqui esta dando erro
                $payment->payment_status_id = 10;
                $payment->save($payment);
                //Log::info("Profissional não recebeu o pagamento porque esta congelada userProfessionalId: $payment->user_id");
            }
            return response('Transferencia realizada com sucesso.', 200);
        } catch (\Throwable $th) {
            Log_central::Create([
                'user_id' => 5, //id cron
                'payment_id' => $payment->id ?? 0,
                'cod_source' => 5,
                'source' =>  "PaymentService => function transfersP2P / Source_requester => " . url()->current(),
                'event_type' => "E",
                'log' => 'ERRO => ' . $th->getMessage()
            ]);
            /*****************FIM LOG CENTRAL*********************/
            return response('Erro ao realizar transferencia p2p' . $th->getMessage(), 422);
        }
    }

    public function frozenProfessional($professionalId)
    {
        $userProfessional = User::find($professionalId);
        return $userProfessional->status == 1 ? true : false;
    }

    public function createCreditPaymentProfessional($payment,$dueDate)
    {
        $paymentAccountProfessional = PaymentAccount::where('user_id', $payment['user_id'])->first();
        Log::info("Crédito para profissional" . $payment);
        $request = new Request();
        $request->merge([
            'value' => $payment['value'],
            'payment_category' => $payment->payment_category,
            'payment_status_id' => 2,
            'payment_type' => 'C',
            'payment_method_id' => 5,
            'payment_account_id' => $paymentAccountProfessional->id, //da clin
            'user_id' => $payment['user_id'],
            'service_slot_id' => isset($payment['service_slot_id']) ? $payment['service_slot_id'] : 0,
            'due_date' => $dueDate ?? ""
        ]);
        $response = PaymentsController::createNewPayment($request);
        return $response;
    }

    public function createAsaasRegister($paymentCredit, $paymentDebit, $responseP2P)
    {
        $paymentCredit = json_decode($paymentCredit->content());
        $paymentDebit = json_decode($paymentDebit);
        $responseP2P = json_decode($responseP2P->content());
        if ($responseP2P) {
            $responseP2P = json_decode($responseP2P->message);
        }
        if ($paymentCredit->service_slot_id) {
            $serviceSlot = ServiceSlot::find($paymentCredit->service_slot_id);
            if (isset($serviceSlot->service_id)) {
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
    }
}
