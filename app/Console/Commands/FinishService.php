<?php

namespace App\Console\Commands;

use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\LogCentralController;
use App\Models\BootWhatsApp\Notification;
use App\Models\BootWhatsApp\NotificationToService;
use App\Models\Service;
use App\Models\ServiceSlot;
use App\Models\ServiceStatus;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FinishService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:finishServices';

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
        Log::info('CRON finishService: iniciando cron!!');
        $this->finish_service();
        Log::info('CRON finishService: cron finalizado!!');
    }

    private function finish_service()
    {
        $services_ids = $this->service_ids();

        if ($services_ids->isNotEmpty()) {
            foreach ($services_ids as $service_id) {
                # code...
                $service = $this->get_service($service_id);
                $slotsProfessionals = $this->get_professional($service_id);
                if ($slotsProfessionals) {
                    $this->createDebitFranchise($service, $slotsProfessionals);
                }
                if (isset($service->client_id) && $slotsProfessionals && ($service->status_id === 4)) {
                    $this->createNotification($service->client_id, $service_id);
                }
            }
        } else {
            $this->reportLogCentral('NÃ£o hÃ¡ serviÃ§os a serem finalizados...');
        }
    }

    private function service_ids()
    {
        return Service::whereDate('end_time', '<=', $this->date_today())->where('status_id', $this->service_status("Confirmado"))->pluck('id');
    }

    private function service_status($title)
    {
        return ServiceStatus::where('title', $title)->value('id');
    }

    private function date_today()
    {
        //return Carbon::parse('2023-03-14 00:00:00');
        return Carbon::today();
    }

    public function createDebitFranchise($service, $slotProfessionals)
    {
        $newDate = new Carbon($service->end_time);
        $newDate = $newDate->addDays(5)->toDateString();

        foreach ($slotProfessionals as $slotProdfessional) {
            # code...
            $request = new Request();
            $request->merge([
                "user_id" => $slotProdfessional->user_id,
                "value" => ((float)$slotProdfessional->value),
                "service_slot_id" => $slotProdfessional->id,
                "payment_category" => 6,
                "payment_method_id" => 5,
                "order_id" => Service::find($service->id)->order_id,
                "franchise_id" => Service::find($service->id)->franchise_id,
                "due_date" => $newDate
            ]);

            $response = FranchiseController::createDebitPayment($request);
            if ($response->status() != 200) {
                $this->reportLogCentral("erro ao gerar o dÃ©bito do franchise referente a profissional =>" . $slotProdfessional->user->name . " Erro:" . $response->getContent());
                return;
            }
            $this->updateStatusService($service);
            $this->reportLogCentral("dÃ©bito gerado com sucesso para a profissional =>" . $slotProdfessional->user->name . " No valor de: " . $slotProdfessional->value);
        }
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

    private function get_professional($service_id)
    {
        return ServiceSlot::where("service_id", $service_id)->has('user')->with('user')->whereNull('deleted_at')->whereNull('fine')->get();
    }

    public function reportLogCentral($message)
    {
        Log::info('CRON finishService: ' . $message);
        $userId = 5;
        $serviceId = 0;
        $codeSource = 5;
        $source = "UpdatePaymentToAsaasTransfer";
        $eventType = "C";
        $message = $message;
        $logCentralController = new LogCentralController();
        $logCentralController->reportLogCentral($userId, $serviceId, $codeSource, $source, $eventType, $message);
    }

    public function createNotification($userId, $serviceId)
    {
        $notification = new Notification();
        $notification->user_id = $userId;
        $notification->status_notifications_id = 1;
        $notification->type_notifications_id = 1;
        $notification->save();
        //vincula notificação a um serviço
        $notificationToService = new NotificationToService();
        $notificationToService->notification_id = $notification->id;
        $notificationToService->service_id = $serviceId;
        $notificationToService->save();
    }
}
