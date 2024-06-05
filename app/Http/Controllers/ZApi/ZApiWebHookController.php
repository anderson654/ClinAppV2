<?php

namespace App\Http\Controllers\ZApi;

use App\Http\Controllers\Controller;
use App\Models\BootWhatsApp\Conversation;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ZApiWebHookController extends Controller
{
    public $data;
    public $zapiController;
    public $phone;
    public $isGroup;
    public $user;
    public $database;
    public $conversation;

    /**
     * @return void
     */
    public function __construct(Request $request)
    {
        //setar a base de dados aqui
        $this->data = $request->all();
        $this->zapiController = new ZApiController();
        $this->phone = $request->all()['phone'];
        $this->isGroup = $request->all()['isGroup'];
        $this->user = User::where('phone', 'like', "%" . substr($request->all()['phone'], -8))->first();
        $this->conversation = Conversation::where('user_id', $this->user->id)->where('status_conversation_id', 1)
            ->has('message')
            ->with('message.group_response_to_message')
            ->has('conversation_to_service')
            ->with('conversation_to_service')
            ->first();
    }


    public function aoreceber()
    {
        if ($this->customInternalMidware()) {
            return response()->json(['message' => $this->customInternalMidware()], 422);
        }
        if (!$this->conversation) {
            $this->senUserToChanel();
            return 'Nenhuma converça em aberto.';
        } else {
            //tratar a converça em aberto da mesma forma em todos os casos
            $bootConversationController = new BootConversationController($this);
            $bootConversationController->nextMessageInTemplate();
            // return 'Existe uma converça em aberto.';
        }
    }

    /**
     * Midware customizado para verificaçoes basicas
     * @return void
     */
    public function customInternalMidware()
    {
        if ($this->isGroup) {
            return 'A mensagem chegou de um grupo.';
        }
        return null;
    }

    public function senUserToChanel()
    {
        switch ($this->user->role_id) {
            case 4:
                # cliente
                dd('Hello');
                break;

            default:
                # code...
                break;
        }
    }
}
