<?php

namespace App\Console\Commands;

use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\LogCentralController;
use App\Http\Controllers\Services\ServicesController;
use App\Http\Controllers\Weni\ApiWeniController;
use App\Models\ControlSendTemplateWhats;
use App\Models\Log_central;
use App\Models\Service;
use App\Models\ServiceSlot;
use App\Models\ServiceStatus;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SendWhatsServiceReview extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:SendWhatsServiceReview';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envio de avaliação de serviço via WhatsApp';

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
        Log::info('CRON SendWhatsServiceReview: iniciando cron!!');
        $this->sendServiceReview();
        Log::info('CRON SendWhatsServiceReview: cron finalizado!!');
    }

    private function sendServiceReview()
    {
        $services_ids = $this->service_ids();
        $count = 0;

        if($services_ids->isNotEmpty()){
            foreach ($services_ids as $service_id) {
                try{ # code...

                   $sendServiceReview = new ApiWeniController();
                   $sendServiceReview->sendServiceReview($service_id);
                   $count++;

                } catch (\Throwable $th) {
                    Log_central::Create([
                        'user_id' => 5,
                        'cod_source' => 5,
                        'source' =>  "Controller SendWhatsServiceReview => function sendServiceReview / Source_requester => " . url()->current(),
                        'event_type' => "C",
                        'log'      => 'ERRO => ' . $th,
                    ]);
                }
            }
            $referenceMonth = date('m') . '-' . date('Y');
            Log::info('Qantidade de Service_reviews enviados: ' . $count);
            $tableControl = ControlSendTemplateWhats::where('template_name', 'send_service_review')
                                                ->where('reference_month', $referenceMonth)
                                                ->first();

            if($tableControl){
                $tableControl->sent_counter = $count + (int)$tableControl->sent_counter;
                $tableControl->save();
            }else{
                $tableControl = New ControlSendTemplateWhats;
                $tableControl->template_name = 'send_service_review';
                $tableControl->reference_month = $referenceMonth;
                $tableControl->sent_counter = $count;
                $tableControl->save();
            }

        }else{
            $this->reportLogCentral('Não há serviços a serem avaliados...');
        }

    }

    private function service_ids()
    {
       return Service::whereDoesntHave('feedback')
                                ->where('end_time', '<=', Carbon::today()->addDay(1))
                                ->where('end_time', '>=', Carbon::today())
                                ->where('status_id', 4)
                                ->pluck('id');
    }

    private function service_status($title)
    {
        return ServiceStatus::where('title', $title)->value('id');
    }

    private function date_today()
    {
        // return Carbon::parse('2022-08-17 00:00:00');
        return Carbon::today();
    }



    private function get_service($id)
    {
        return Service::findOrFail($id);
    }

    private function updateStatusService($service)
    {
        $service->status_id = 4;
        $service->save();
    }


    public function reportLogCentral($message)
    {
        Log::info('CRON finishService: '. $message);
        $userId = 5;
        $serviceId = 0;
        $codeSource = 5;
        $source = "SendWhatsServiceReview";
        $eventType = "C";
        $message = $message;
        $logCentralController = new LogCentralController();
        $logCentralController->reportLogCentral($userId, $serviceId, $codeSource, $source, $eventType, $message);
    }
}
