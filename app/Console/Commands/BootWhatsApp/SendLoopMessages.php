<?php

namespace App\Console\Commands\BootWhatsApp;

use App\Http\Controllers\ZApi\ZApiController;
use App\Models\BootWhatsApp\Message;
use App\Models\BootWhatsApp\StartLoopMessages;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Builder;

class SendLoopMessages extends Command
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
    protected $signature = 'app:send-loop-messsages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando executa o loop nas mensagens caso não tenha resposta do cliente.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sendLoopMessages = StartLoopMessages::whereHas('conversation', function (Builder $query) {
            $query->where('status_conversation_id', 1);
        })->with('conversation')->get();

        //10 min de repetição.

        $filteredLoopMessages = $sendLoopMessages->filter(function ($sendLoopMessage) {
            return (
                $sendLoopMessage->conversation->user_id === $sendLoopMessage->user_id &&
                $sendLoopMessage->conversation->message_id === $sendLoopMessage->message_id &&
                Carbon::createFromFormat('Y-m-d H:i:s', $sendLoopMessage->updated_at)->addMinutes(10) < Carbon::now()
            );
        });

        foreach ($filteredLoopMessages as $key => $filterLoopMessage) {
            # code...
            $this->loopFilters($filterLoopMessage);
        }
    }

    public function loopFilters($filterLoopMessage)
    {
        switch ($filterLoopMessage->message_id) {
            case 26:
                if ($filterLoopMessage->count >= 3) {
                    return;
                }
                $user = User::find($filterLoopMessage->user_id);
                $message = Message::find($filterLoopMessage->message_id);

                $this->zApiController->sendMessage($user->phone,  str_replace('\n', "\n", $message->message));
                StartLoopMessages::incrementCount($filterLoopMessage);
                # code...
                break;
            default:
                # code...
                break;
        }
    }
}
