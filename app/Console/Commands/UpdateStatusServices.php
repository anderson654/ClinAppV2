<?php

namespace App\Console\Commands;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ErrorsController;
use App\Models\Asaas\Asaas;
use App\Models\Asaas\AsaasBilling;
use App\Models\Payment;
use App\Models\Service;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UpdateStatusServices extends Command
{
    private $asaasTokens;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updateStatusService:cron';

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
        $this->asaasToken = Asaas::tokens()->access_token;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //verifica as faxinas que foram pagas e não realizadas e gera um crédito para os clientes
        $this->gerateCreditPayments();
    }



    public function gerateCreditPayments()
    {
        $services = Service::whereIn('status_id', [1, 2, 3])
            ->whereDate('end_time', '<=', Carbon::now()
                ->subDays(1)
                ->toDateString())->with('payment_to_service')->get();

        //verifica se tem pagamento e se tiver e for diferente de pago ou recebido cancelar pagamento
        $count = 0;
        foreach ($services as $service) {
            //teste
            $this->generateCreditClient($service->client_id, $service->value, $service->id);
            $count++;
            # code...
            if (isset($service->payment_to_service)) {
                //se o serviço for diferente de cancelado
                if ($service->payment_to_service->payment_status_id != 3) {
                    //verifica se o pagamento é do asaas
                    $isPaymentAssas = $this->verifyPaymentIsAsaas($service->payment_to_service->id);
                    //pega o status do pagamento
                    $paymentStatus = in_array($service->payment_to_service->payment_status_id, [2, 12]);
                    //se for status Pago ou recebido
                    if ($paymentStatus) {
                        $isPaymentAssas ? $this->generateCreditClient($service->client_id, $service->value, $service->id) : Log::info("PaymentId :" . $service->id . 'Pagamento para esse serviço não é do asaas');
                    } elseif (!$paymentStatus) {
                        $isPaymentAssas ? $this->deletPaymentInAsaas($service->payment_to_service) : Log::info("PaymentId :" . $service->id . 'Pagamento para esse serviço não é do asaas');
                    }
                } else {
                    Log::info("PaymentId :" . $service->id . 'O pagamento já foi cancelado');
                }
            } else {
                Log::info("PaymentId :" . $service->id . 'O serviço não possui um pagamento do tipo asaas');
            }
        }
        Log::info($count);
    }


    public function deletPaymentInAsaas($payment)
    {
        try {
            //code...
            $idPaymentAsaas = $this->getPaymentAsaasBilling($payment->id);
            $response = Http::withoutVerifying()->withHeaders([
                'Content-Type' => 'application/json',
                'access_token' => $this->asaasToken
            ])->delete(config("routes.ASAAS") . "payments/$idPaymentAsaas");

            if ($response->getStatusCode() == 200) {
                $this->updatePayment($payment, 3);
                Log::info("Pagamento excluido com sucesso" . $response->getBody()->getContents());
            } elseif ($response->getStatusCode() == 401) {
                throw new Exception("Asaas Error: Erro de autenticação asaas", 401);
            } elseif ($response->getStatusCode() == 404) {
                throw new Exception("Pagamento asaas não encontrado", 404);
            } else {
                throw new Exception($response->getBody()->getContents(), $response->getStatusCode());
            }
        } catch (\Throwable $th) {
            $message = $th->getMessage();
            Log::info("Erro ao deletar pagamento em UpdateStatusService.php : $message" . " CodeResponse" . $th->getCode());
            //throw $th;
        }
    }

    public function updatePayment($payment, $newStatusPayment)
    {
        $payment->payment_status_id = $newStatusPayment;
        $payment->save();
    }

    public function verifyPaymentIsAsaas($paymentId)
    {
        $asaasPayment = AsaasBilling::where('payment_id', $paymentId)->first();
        return isset($asaasPayment);
    }

    public function getPaymentAsaasBilling($paymentId)
    {
        return AsaasBilling::where('payment_id', $paymentId)->first()->asaasPaymentId;
    }

    public function generateCreditClient($clientId, $valueService, $serviceId)
    {
        if (!$this->verifyExistCreditToService($clientId, $valueService, $serviceId)) {
            //service ou slot
            $clientController = new ClientController;
            $request = new Request();
            $errorsController = new ErrorsController();

            $dateNow = Carbon::now()->toDateString();

            $request->merge([
                "user_id" => $clientId, //cliente
                "payment_status_id" => 2,
                "payment_date" => $dateNow,
                "value" => $valueService,
                "payment_type" => 'C',
                "payment_method_id" => 6,
                "payment_category" => 11,
                "service_id" => $serviceId
            ]);
            $response = $clientController->createCredit($request);
            $statusCode = $response->getStatusCode();
            if ($statusCode != 200) {
                $errorsController->checkResponseCode($response);
                return false;
            }
        }
        dd($serviceId);
        return true;
    }

    public function verifyExistCreditToService($clientId, $valueService, $serviceId)
    {
        $paymentCreditToService = Payment::where('user_id', $clientId)
            ->where('payment_status_id', 2)
            ->where('payment_type', 'C')
            ->where('payment_method_id', 6)
            ->where('service_id', $serviceId)
            ->where('value', $valueService)
            ->exists();
        return $paymentCreditToService;
    }
}
