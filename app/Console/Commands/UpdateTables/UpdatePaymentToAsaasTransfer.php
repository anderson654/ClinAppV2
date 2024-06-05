<?php

namespace App\Console\Commands\UpdateTables;

use App\Console\Commands\CreateWeebHooksProfessionals;
use App\Http\Controllers\LogCentralController;
use App\Models\AsaasTransfer;
use App\Models\Log_central;
use App\Models\PaymentAccount;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UpdatePaymentToAsaasTransfer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:updatePaymentToAsaasTransfers';

    /**
     * The console command description.
     *
     * @var string
     */
    //esse cron esta verificando apenas as com status done e dando update no serviço aprimorar!!!!!!!!!!
    protected $description = 'Atualiza os pagamentos das profissionais de acordo com o registro do asaas alem de criar webHoockDaProfissional caso não exista';

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
        $asaasTransfers = $this->getAsaasTransfers();
        if ($asaasTransfers->exists()) {
            foreach ($asaasTransfers->get() as $asaasTransfer) {
                $isPaymentProfessional = $this->verifyPaymentProfessional($asaasTransfer);
                if ($isPaymentProfessional) {
                    $responseObject = $this->checkProfessionalTransfer($asaasTransfer);
                    if (isset($responseObject)) {
                        $this->executeFunctionsToStatusTransfer($asaasTransfer, $responseObject);
                    } else {
                        Log::info('CRON updatePaymentToAsaasTransfers: Erro ao recuperar transferencia ' . $asaasTransfer->transfer_id . 'Motivo: Erro ao busca tranferencia no asaas');
                    }
                } else {
                    Log::info('CRON updatePaymentToAsaasTransfers: erro ao atualizar o pagamento ' . $asaasTransfer->payment->id . 'Motivo: não se refere a um pagamento de profissional!!');
                }
                // caso exista executa a função de criar webHoock para a profissional assim 
                // é possivel garantir a integridade da tabela e que a profissional tenha um webHoock
                // $createWebHoockProfessionals = new CreateWeebHooksProfessionals();
                // $createWebHoockProfessionals->createWeebHoock($asaasTransfer->payment->payment_paymentAccount);
            }
        } else {
            Log::info('CRON updatePaymentToAsaasTransfers: não existem pagamentos a serem verificados');
            Log::info('CRON updatePaymentToAsaasTransfers: FINALIZADO');
        }
    }

    public function getAsaasTransfers()
    {
        return AsaasTransfer::where('status', 'PENDING')->whereNotNull('payment_id')
            ->has('payment.payment_professional')
            ->has('payment.payment_paymentAccount')
            ->with('payment', 'payment.payment_paymentAccount');
    }

    public function checkProfessionalTransfer($asaasTransfer)
    {
        $apiKeyAssas = $asaasTransfer->payment->payment_paymentAccount->apiKey;
        $response = Http::withoutVerifying()->withHeaders([
            'Content-Type' => 'application/json',
            'access_token' => $apiKeyAssas
        ])->get(config("routes.ASAAS") . "transfers/$asaasTransfer->transfer_id");
        if ($response->status() != 200) {
            Log::info("CRON updatePaymentToAsaasTransfers: Erro ao consultar a transferencia de id == $asaasTransfer->transfer_id");
        }
        return json_decode($response->getBody()->getContents());
    }

    public function verifyPaymentProfessional($asaasTransfer)
    {
        $payment = $asaasTransfer->payment;
        $payment_method_id = $payment->payment_method_id;
        $payment_category_id = $payment->payment_category;
        return $payment_method_id == 3 && $payment_category_id == 4;
    }

    public function executeFunctionsToStatusTransfer($asaasTransfer, $responseObject)
    {
        DB::beginTransaction();
        switch ($responseObject->status) {
            case 'DONE':
                # code...
                $this->updateAsaasTransfers($asaasTransfer, $responseObject);
                $this->updateStatusPayment($asaasTransfer);
                //esta dando erro verificar
                // $this->reportLogCentral("CRON updatePaymentToAsaasTransfers: Pagamento atualizado com sucesso para status (PAGO) =>" . $asaasTransfer->payment->id);
                DB::commit();
                break;
            case 'PENDING':
                # code...
                break;

            default:
                # code...
                break;
        }
    }

    public function updateAsaasTransfers($asaasTransfer, $responseObject)
    {
        try {
            //code...
            $asaasTransfer->transfer_id = $responseObject->id;
            $asaasTransfer->status = $responseObject->status;
            $asaasTransfer->dateCreated = $responseObject->dateCreated;
            $asaasTransfer->effectiveDate = $responseObject->effectiveDate;
            $asaasTransfer->event = 'APROVE_TRANSFER_CRON';
            $asaasTransfer->object = $responseObject->object;
            $asaasTransfer->endToEndIdentifier = $responseObject->endToEndIdentifier;
            $asaasTransfer->type = $responseObject->type;
            $asaasTransfer->value = $responseObject->value;
            $asaasTransfer->netValue = $responseObject->netValue;
            $asaasTransfer->transferFee = $responseObject->transferFee;
            $asaasTransfer->scheduleDate = $responseObject->scheduleDate;
            $asaasTransfer->authorized = $responseObject->authorized;
            $asaasTransfer->confirmedDate = $responseObject->confirmedDate;
            $asaasTransfer->failReason = $responseObject->failReason;
            $asaasTransfer->bank_code = $responseObject->bankAccount->bank->code;
            $asaasTransfer->bank_name = $responseObject->bankAccount->bank->name;
            $asaasTransfer->bank_accountName = $responseObject->bankAccount->accountName;
            $asaasTransfer->bank_ownerName = $responseObject->bankAccount->ownerName;
            $asaasTransfer->bank_cpfCnpj = $responseObject->bankAccount->cpfCnpj;
            $asaasTransfer->bank_agency = $responseObject->bankAccount->agency;
            $asaasTransfer->bank_agencyDigit = $responseObject->bankAccount->agencyDigit;
            $asaasTransfer->bank_account = $responseObject->bankAccount->account;
            $asaasTransfer->bank_accountDigit = $responseObject->bankAccount->accountDigit;
            $asaasTransfer->bank_pixAddressKey = $responseObject->bankAccount->pixAddressKey;
            $asaasTransfer->transactionReceiptUrl = $responseObject->transactionReceiptUrl;
            $asaasTransfer->operationType = $responseObject->operationType;
            $asaasTransfer->description = $responseObject->description;
            $asaasTransfer->save();
        } catch (\Throwable $th) {
            report($th);
            DB::rollBack();
            Log::info('CRON updatePaymentToAsaasTransfers: Verificar o status da transferencia no asaas: ' . $asaasTransfer->transfer_id . ' Erro interno: ' . $th->getMessage());
        }
    }

    public function updateStatusPayment($asaasTransfer)
    {
        try {
            //code...
            $asaasTransfer->payment->payment_status_id = 2;
            $asaasTransfer->payment->save();
        } catch (\Throwable $th) {
            report($th);
            DB::rollBack();
            Log::info('CRON updatePaymentToAsaasTransfers: Verificar o status da transferencia no asaas: ' . $asaasTransfer->transfer_id . ' Erro interno: ' . $th->getMessage());
        }
    }

    public function reportLogCentral($message)
    {
        $userId = 5;
        $serviceId = 0;
        $codeSource = 5;
        $source = "UpdatePaymentToAsaasTransfer";
        $eventType = "U";
        $message = $message;
        $logCentralController = new LogCentralController();
        $logCentralController->reportLogCentral($userId, $serviceId, $codeSource, $source, $eventType, $message);
    }
}
