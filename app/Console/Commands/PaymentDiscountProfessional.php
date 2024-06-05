<?php

namespace App\Console\Commands;

use App\Http\Controllers\AsaasController;
use App\Http\Controllers\Finance\PaymentsController;
use App\Models\Asaas\Asaas;
use App\Models\Log_central;
use App\Models\Payment;
use App\Models\PaymentAccount;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PaymentDiscountProfessional extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paymentDiscountProfessional:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Desconta das profissionais pagamentos do tipo 8,9,10';

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
        //pega todos os pagamentos que tem que ser feito hj 
        $creditPayments = Payment::where('payment_status_id', 1)
            ->whereIn('payment_category', [8, 9, 10])
            ->where('payment_type', 'C')
            ->whereDate('due_date', '<=', Carbon::now()->toDateString());

        //verificar se a profissional tem saldo; * fazer
        if ($creditPayments->count() == 0) {
            
            Log_central::Create([
                'user_id' => 5,
                'cod_source' => 5,
                'source' =>  "Controller PaymentProfessionalsP2P => function transfersP2P / Source_requester => " . url()->current(),
                'event_type' => "C",
                'log'      => 'ERRO => ' . "Nenhum débito encontrado para realizar transferencias P2P",
            ]);
            Log::info("Nenhum desconto para ser feito hoje");
        }

        foreach ($creditPayments->get() as $payment) {
            //verifica se a profissional esta congelada
            $this->cronP2P($payment);
        }
    }

    public function cronP2P($payment)
    {
        //para quem quer tranferir
        try {
            //code...
            $asaasAccount = Asaas::walletId(1);
            $account = PaymentAccount::where('user_id', $payment['user_id'])->first();

            $request = new Request();
            $newTransferP2P = new AsaasController();
            //realiza o pagamento da faxina

            $request = new Request();
            $payment = $payment->toArray();
            $request->merge($payment);
            $request->merge([
                "value" => $payment['value'],
                "walletId" => $asaasAccount->walletId, //local
                "access_token" => $account->apiKey
            ]);
            $response = $newTransferP2P->transfersP2P($request);
            if ($response->getStatusCode() == 200) {
                $payment = Payment::find($payment['id']);
                $payment->payment_status_id = 2;
                $payment->save();
                $this->createNewCredit($payment, $account);
            } else {
                $payment->payment_status_id = 10;
                $payment->save();
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


    public function createNewCredit($payment, $account)
    {
        $request = new Request();
        $request->merge([
            'value' => $payment['value'],
            'payment_category' => isset($payment['payment_category']) ? $payment['payment_category'] : 8,
            'payment_status_id' => 2,
            'payment_type' => 'D',
            'payment_method_id' => 5,
            'payment_account_id' => $account->id,
            'user_id' => $payment['user_id'],
            'franchise_id' => $payment['franchise_id'],
            'service_slot_id' => $payment['service_slot_id'],
            'due_date' => 0
        ]);
        PaymentsController::createNewPayment($request);
        Log::info('desconto aplicado');
    }
}
