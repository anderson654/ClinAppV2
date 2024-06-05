<?php

namespace App\Console\Commands\Professionals;

use App\Http\Controllers\Asaas\AsaasBillingController;
use App\Http\Controllers\ZApi\ZApiController;
use App\Models\Asaas\Asaas;
use App\Models\ExemptFromPayment;
use App\Models\Payment;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use League\Csv\Writer;

class updateSignaturePayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'professionals:updateSignaturePayment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando verifica os pagamentos referente a assinatura da profissional.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->checkSignaturePayment();
        return Command::SUCCESS;
    }

    public function checkSignaturePayment()
    {
        //pega as profissionais que estão isentas da mensalidade;
        $exeptUser = ExemptFromPayment::get()->pluck('user_id');
        //pega apenas dos ultimos 60 dias;
        $startDate = Carbon::now()->subDays(60);
        $endDate = Carbon::now();

        $payments = Payment::whereIn('payment_category', [1])->with('user', 'asaas_billings')
            ->has('asaas_billings')
            ->whereIn('payment_status_id',  [1, 13])
            ->whereNotIn('user_id', $exeptUser)
            ->whereBetween('created_at', [$startDate, $endDate]);

        if ($payments->exists()) {
            // dd($payments->first());
            foreach ($payments->get() as $payment) {
                # code...
                if (isset($payment->asaas_billings->asaasPaymentId)) {
                    $this->setStatusPaymentAsaas($payment);
                }
            }
        }

        //pega os pagamentos novamente e realiza o relatorio
        $pending = [
            ['Nome', 'ID do pagamento', 'ID da profissional', 'Número', 'Link WhatsApp', 'Link do pagamento', 'Data da mensalidade']
        ];
        if ($payments->exists()) {
            foreach ($payments->get() as $payment) {
                # code...
                $array = [
                    $payment->user->name,
                    $payment->id,
                    $payment->user->id,
                    $payment->user->phone ?? 'Número principal não encontrado.',
                    isset($payment->user->phone) ? "https://wa.me/+55" . $payment->user->phone : 'Número principal não encontrado.',
                    "https://www.asaas.com/i/" . str_replace('pay_', '', $payment->asaas_billings->asaasPaymentId),
                    Carbon::create($payment->asaas_billings->created_at)->format('d/m/Y')
                ];
                array_push($pending, $array);
            }
        }
        //pega a data de hoje
        $dataTimeNow = Carbon::now()->toDateString();



        $csv = Writer::createFromPath(public_path("csv_output/$dataTimeNow.csv"), 'w+');
        $csv->insertAll($pending);

        $csvContent = $csv->toString();

        $base64Content = base64_encode($csvContent);

        $zapiController = new ZApiController();

        $title = "Inadinplentes mensalidades " . $dataTimeNow;

        $zapiController->sendDocument('5541985231897', "data:text/csv;base64," . $base64Content, $title);
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
                case 'RECEIVED_IN_CASH':
                    $payment->payment_status_id = 12;
                    break;
                default:
                    // Caso o status não corresponda a nenhum dos casos anteriores
                    throw new Exception("status do pagamento não reconhecido");

                    break;
            }

            if ($response['deleted'] === true) {
                //pagamento cancelado
                $payment->payment_status_id = 3;
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
                Log::info(json_encode($response->getBody()->getContents()));
            } else if ($response->status() == 404) {
                $payment->payment_status_id = 22;
                $payment->save();
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
            Log::info(json_encode($th->getMessage()));
        }
    }
}
