<?php

namespace App\Console\Commands;

use App\Http\Controllers\AsaasController;
use App\Http\Controllers\LogCentralController;
use App\Models\Payment;
use App\Models\PaymentAccount;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CreateWeebHooksProfessionals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'teste:createWeebHooksProfessional';

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
        $paymentAccounts = PaymentAccount::has('professional')->with('professional')->get();
        foreach ($paymentAccounts as $paymentAccount) {
            # code...
            $this->createWeebHoock($paymentAccount);
        }
    }

    public function createWeebHoock($paymentAccount)
    {
        $apiKey = $paymentAccount->apiKey;
        try {
            $webHoock = new AsaasController;
            $request = new Request();
            $request->merge(["apiKey" => $apiKey]);
            $response = $webHoock->createWeebHookTransfer($request);
            if ($response->status() == 200) {
                Log::info('CRON createWeebHooksProfessional: webhoock regitrado com sucesso profissional => ' . $paymentAccount->professional->name);
                $this->reportLogCentral('CRON createWeebHooksProfessional: webhoock regitrado com sucesso profissional => ' . $paymentAccount->professional->name);
            } else {
                Log::info('CRON createWeebHooksProfessional: Erro na requisição asaas ao criar webhoock para a profissional =>' . $paymentAccount->professional->name);
                $this->reportLogCentral('CRON createWeebHooksProfessional: Erro na requisição asaas ao criar webhoock para a profissional =>' . $paymentAccount->professional->name);
            }
        } catch (\Throwable $th) {
            //throw $th;
            report($th);
            $this->reportLogCentral('CRON createWeebHooksProfessional: Erro ao criar webHoockPara a profissional =>' . $paymentAccount->professional->name . " Erro interno:" . $th->getMessage());
            Log::info('CRON createWeebHooksProfessional: Erro ao criar webHoockPara a profissional =>' . $paymentAccount->professional->name . " Erro interno:" . $th->getMessage());
        }
    }

    public function reportLogCentral($message)
    {
        $userId = 5;
        $serviceId = 0;
        $codeSource = 5;
        $source = "CreateWeebHoksProfessionals";
        $eventType = "C";
        $message = $message;
        $logCentralController = new LogCentralController();
        $logCentralController->reportLogCentral($userId, $serviceId, $codeSource, $source, $eventType, $message);
    }
}
