<?php

namespace App\Console\Commands\CronJobCommands;

use App\Http\Controllers\Asaas\AsaasBillingController;
use App\Http\Controllers\Mail\MailerSenderController;
use App\Models\Asaas\Asaas;
use App\Models\Payment;
use App\Models\Service;
use App\Models\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CheckServicesPayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:checkServicesPayment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando verifica todos os pagamentos feitos pelos clientes atraves da plataforma asaas(caso não pago envia email de cobança).';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //tem que ser um serviço comfirmado
        $services = Service::has('asaas_billing_pending')->has('payment')->whereNotNull('payment_id')->get();
        // $services = Service::has('asaas_billing_pending')->with('asaas_billing_pending')->whereNotNull('payment_id')->where('id', '70372')->get();
        Log::info("----------------Verificando Pagamento de clientes---------------");
        foreach ($services as $key => $service) {
            # code...
            Log::info("Id do Serviço: " . $service->id . ".");
            $result = $this->setStatusPaymentAsaas($service);
        }
        Log::info("----------------Fim Verificando Pagamento de clientes---------------");
        return Command::SUCCESS;
    }

    public function setStatusPaymentAsaas($service)
    {
        //pegar o pagamento do serviço
        $payment = Payment::find($service->payment_id);
        if (!$payment) {
            Log::info('Pagamento deletado ou não existe');
            return;
        }
        try {
            //code...
            $response = $this->verifyPaymentAsaas($service);
            Log::info('Status do pagamento: ' . $response['status'] . '.');

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
                    Log::info("status do pagamento não reconhecido");
                    break;
            }

            if (!$payment->save()) {
                Log::info("Error ao salvar o status do pagamento");
            }

            if (in_array($response['status'], ['PENDING', 'OVERDUE']) && ($response['deleted'] != true)) {
                $sendEmail = new MailerSenderController();
                $user = User::where('id', $service->client_id)->first();
                // if ($user->email == 'andersong.salvador@gmail.com') {
                    Log::info('Enviando email.');
                    $sendEmail->billingEmail($user, $service);
                // }
            } elseif ($response['deleted'] == true) {
                //atualiza o pagamento do serviço para deletado caso não esteja
                $payment = Payment::find($service->payment_id);
                if (!$payment->delete()) {
                    Log::info('Erro ao deletar pagamento.');
                }
                Log::info('Pagamento deletado' . $service->payment_id);
            }
        } catch (\Throwable $th) {
            //throw $th;
            $errorMessage = $th->getMessage();
            $errorLine = $th->getLine();
            $errorFile = $th->getFile();

            Log::info("Erro ao verificar pagamento: " . $errorMessage . ',' . $errorLine . ',' . $errorFile);
        }
    }

    public function verifyPaymentAsaas($service)
    {
        try {
            $asaasPayment = $service->asaas_billing_pending;
            //code...
            $asaasTokens = Asaas::tokens();
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $asaasTokens->access_token
            ])->get(config("routes.ASAAS") . "payments/" . $asaasPayment->asaasPaymentId);
            if ($response->status() != 200) {
                throw new Exception("erro ao buscar pagamento asaas.", $response->status());
            }
            // Criar uma nova instância de Request
            $request = new Request();
            // Adicionar o campo payment_id à solicitação
            $request->merge(['payment_id' => $service->payment_id]);

            AsaasBillingController::updateBilling($request, $response);

            sleep(2);
            return $response;
        } catch (\Throwable $th) {
            //throw $th;
            Log::info($th->getMessage());
        }
    }
}
