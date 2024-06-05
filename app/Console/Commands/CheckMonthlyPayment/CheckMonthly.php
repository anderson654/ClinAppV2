<?php

namespace App\Console\Commands\CheckMonthlyPayment;

use App\Http\Controllers\Asaas\AsaasBillingController;
use App\Models\Asaas\Asaas;
use App\Models\Asaas\AsaasBilling;
use App\Models\Payment;
use App\Models\ProfessionalsPlan;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class CheckMonthly extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkMonthlyPayment:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Esse comando verifica se a profissional realizou o pagamento da mensalidade e atualiza o pagamento';

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

        ini_set('max_execution_time', 100000000);

        Log::info("-------------------------------------");
        Log::info("cron verificação de pagamentos Asaas");
        $payments = Payment::whereIn('payment_category', [1, 3])
            // ->whereNotIn('payment_gateway_id', [1])
            ->whereNotIn('payment_status_id',  [2, 15, 20]);


        //essa verificação deve ser ajustada depois
        // ->has('asaas_billings');

        log::info($payments->count());

        foreach ($payments->get() as $key => $payment) {
            # code...
            Log::info("Verificando pagamento: " . $payment->id);
            $this->verifyPayment($payment);
            // dd($payment->asaas_billings->asaasPaymentId);
        }
        Log::info("fim cron verificação de pagamento de mensalidade");
        Log::info("-------------------------------------");
    }

    public function verifyPayment($payment)
    {
        switch ($payment->payment_gateway_id) {
            case 2:
                # code...
                $this->setStatusPaymentAsaas($payment);
                $this->checkPaymentAsaas($payment);
                break;

            default:
                $this->setStatusPaymentAsaas($payment);
                # code...
                break;
        }
    }

    public function checkPaymentAsaas($payment)
    {
        switch ($payment->payment_category) {
            case 1:
                # code...
                //executar a verificação para bloquear a profissional
                $asaasBilling = AsaasBilling::where('payment_id', $payment->id)->first();

                $dataBase = Carbon::createFromFormat('Y-m-d', $asaasBilling->dueDate);
                $limitDate = $dataBase->addDays(5);

                //verifica se o boleto passou 5 dias
                if ($limitDate->isPast()) {
                    //verifica se o boleto é deste mês
                    if ($limitDate->year === $limitDate->year && $limitDate->month === $limitDate->month) {
                        //verifica o status do pagamento
                        $payment = Payment::find($payment->id);
                        if ($payment->payment_status_id != 2) {
                            //bloquear o plano
                            $plan = ProfessionalsPlan::where('user_id', $payment->user_id)->first();
                            $plan->status_id = 2;
                            $plan->save();
                        }
                    }
                }

                break;
            default:
                # code...
                break;
        }
    }

    public function setStatusPaymentAsaas($payment)
    {
        try {
            //code...
            $response = $this->verifyPaymentAsaas($payment);

            switch ($response['status']) {
                case 'RECEIVED':
                    $payment->payment_status_id = 12;
                    break;
                case 'CONFIRMED':
                    $payment->payment_status_id = 14;
                    log::info('countCONFIRMED');
                    break;
                case 'PENDING':
                    $payment->payment_status_id = 1;
                    break;
                case 'OVERDUE':
                    $payment->payment_status_id = 13;
                    break;
                case 'REFUNDED':
                    $payment->payment_status_id = 15;
                    break;
                case 'REFUND_REQUESTED':
                    $payment->payment_status_id = 16;
                    break;
                case 'REFUND_IN_PROGRESS':
                    $payment->payment_status_id = 17;
                    break;
                case 'CHARGEBACK_REQUESTED':
                    $payment->payment_status_id = 18;
                    break;
                case 'CHARGEBACK_DISPUTE':
                    $payment->payment_status_id = 19;
                    break;
                case 'AWAITING_CHARGEBACK_REVERSAL':
                    $payment->payment_status_id = 20;
                    break;
                case 'AWAITING_RISK_ANALYSIS':
                    $payment->payment_status_id = 21;
                    break;
                case 'PAYMENT_DELETED':
                    $payment->payment_status_id = 3;
                    break;
                default:
                    // Caso o status não corresponda a nenhum dos casos anteriores
                    throw new Exception("status do pagamento não reconhecido");

                    break;
            }

            $payment->value = $response['value'];
            $payment->net_value = $response['netValue'];
            Log::info("Status pagamento: " . $response['status']);
            if (!$payment->save()) {
                throw new Exception("Error ao salvar o status do pagamento");
            }
        } catch (\Throwable $th) {
            //throw $th;
            Log::info("Erro ao verificar pagamento: " . $th->getMessage());
        }
    }

    public function verifyPaymentAsaas($payment)
    {
        try {
            $asaasPaymentId = $payment->asaas_billings->asaasPaymentId;
            //code...
            $asaasTokens = Asaas::tokens();
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $asaasTokens->access_token
            ])->get(config("routes.ASAAS") . "payments/" . $asaasPaymentId);

            if (!$response->status() == 200) {
                throw new Exception("Erro asaas: " . $response->getBody()->getContents());
            }


            // Criar uma nova instância de Request
            $request = new Request();
            // Adicionar o campo payment_id à solicitação
            $request->merge(['payment_id' => $payment->id]);


            AsaasBillingController::updateBilling($request, $response);

            //$status = json_decode($response->getBody()->getContents());

            //$status = $status->status;

            return $response;
        } catch (\Throwable $th) {
            //throw $th;
            throw new Exception("Erro ao realizar a requisição em verifyPaymentAsaas: " . $th->getMessage());
        }
    }
}
