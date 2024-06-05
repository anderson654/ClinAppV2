<?php

namespace App\Console\Commands\BootWhatsApp;

use App\Http\Controllers\ZApi\ZApiController;
use App\Models\BootWhatsApp\Conversation;
use App\Models\BootWhatsApp\Message;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CloseConversations extends Command
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
    protected $signature = 'app:close-conversations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //pegar todas as converças em aberto
        $conversations = Conversation::where('status_conversation_id', 1)->get();

        foreach ($conversations as $key => $conversation) {
            # code...
            //se a converça for maior que uma hr nem entra aqui
            if (Carbon::createFromFormat('Y-m-d H:i:s', $conversation->updated_at)->addMinutes(60) < Carbon::now()) {
                $this->closeConversationHour($conversation);
                return;
            }
            $this->filterAndCloseConversation($conversation);
        }

        return Command::SUCCESS;
    }

    public function filterAndCloseConversation($conversation)
    {
        switch ($conversation->message_id) {
            case 25:
                if (Carbon::createFromFormat('Y-m-d H:i:s', $conversation->updated_at)->addMinutes(20) < Carbon::now()) {
                    //ir para a proxima mensagem
                    Conversation::updateManualyConversationMessage($conversation, 27);
                    //enviar a mensagem
                    $message = Message::find(27);
                    $this->zApiController->sendMessage($conversation->user->phone, str_replace('\n', "\n", $message->message));
                    Conversation::closeManualyConversation($conversation);
                }
                # code...
                break;

            default:
                # code...
                break;
        }
    }


    public function closeConversationHour($conversation)
    {
        Conversation::closeManualyConversation($conversation);
    }
}
