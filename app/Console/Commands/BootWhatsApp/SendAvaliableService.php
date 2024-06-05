<?php

namespace App\Console\Commands\BootWhatsApp;

use App\Http\Controllers\ZApi\ZApiController;
use App\Models\BootWhatsApp\Conversation;
use App\Models\BootWhatsApp\ConversationsToService;
use App\Models\BootWhatsApp\ErrorSendNotification;
use App\Models\BootWhatsApp\Message;
use App\Models\BootWhatsApp\Notification;
use App\Models\BootWhatsApp\NotificationToService;
use App\Models\ServiceSlot;
use App\Models\User;
use App\Models\Utils\BootUtils;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SendAvaliableService extends Command
{
    private $zApiController;

    public function __construct()
    {
        parent::__construct();
        $this->zApiController = new ZApiController();
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-avaliable-service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia a avaliação de faxina para o cliente via whatsApp';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::beginTransaction();
        try {
            //code...
            //envia a notificação aqui
            $notifications = $this->getNotifications();
            foreach ($notifications as $key => $notification) {
                # code...
                $this->openConversation($notification);
            }
            DB::commit();
            Log::info('Enviando notificação de avaliação.');
            return Command::SUCCESS;
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            Log::info("Erro SendAvaliableService: ", $th->getMessage());
        }
    }

    public function getNotifications()
    {
        //AJUSTAR AQUI PRECISA EXISTIR O USER E O TELEFONE DO USER PARA SER ENVIADA
        return Notification::where('status_notifications_id', 1)
            ->where('type_notifications_id', 1)
            // ->where('user_id', 701333)
            ->has('notification_to_service')
            ->with('notification_to_service')
            ->get();
    }

    public function openConversation($notification)
    {
        //verificaçoes basicas
        if (!$this->defaultVerifications($notification)) {
            return;
        }

        $servicesSlots =  ServiceSlot::where('service_id', $notification->notification_to_service->service_id)->with('service.client')->get();
        $totalProfessionals =  $servicesSlots->count();

        $message = new Collection();
        if ($totalProfessionals === 1) {
            // dd($servicesSlots[0]->service->client->name);
            //seta os valores na mensagem
            $message = Message::where('template_id', 1)->where('priority', 1)->first();
            $message->message = BootUtils::setDefaultNames(['name_professional' => $servicesSlots[0]->professional_name, 'name_client' => $servicesSlots[0]->service->client->name], $message->message);
        } else {
            $message = Message::where('template_id', 1)->where('priority', 5)->first();
            $message->message = BootUtils::setDefaultNames(['name_client' => $servicesSlots[0]->service->client->name], $message->message);
        }

        //se não estiver em uma converça abre uma.
        $newConversation = Conversation::openConversation($notification->user_id, $message->id);
        //salva uma referencia
        ConversationsToService::saveReference($newConversation->id, $notification->notification_to_service->service_id);
        $this->zApiController->sendMessage($notification->user->phone, $message->message);

        if ($newConversation) {
            //se a converça tiver sido aberta e a mensagem enviada fecha a notificação.
            //utilizar do db transaction para dar rolback caso de erro ao enviar a mensagem ou salvar a converça.
            Notification::closeNotification($notification);
        }
    }

    public function defaultVerifications($notification)
    {
        //verifica se o user na notificação existe
        if (!isset($notification->user)) {
            ErrorSendNotification::logErrorNotification($notification->id, 'User da notificação não encontrado.');
            Notification::errorNotification($notification);
            return false;
        }
        //verifica se o user tem um telefone principal
        if (!isset($notification->user->phone)) {
            ErrorSendNotification::logErrorNotification($notification->id, 'Telefone do User não encontrado.');
            Notification::errorNotification($notification);
            return false;
        }

        //Verifica se o user esta em uma converça
        $conversation = Conversation::verifyUserInConversation($notification->user_id);
        if ($conversation) {
            //se estiver em uma converça não faz nada;
            return false;
        }

        return true;
    }
}
