<?php

namespace App\Models\BootWhatsApp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartLoopMessages extends Model
{
    protected $connection = 'db_whats';

    use HasFactory;

    public static function createNewLoopMessage($userId, $conversationId, $messageId)
    {
        //cria um registro na tabela
        $startLoopMessage = new StartLoopMessages();
        $startLoopMessage->user_id = $userId;
        $startLoopMessage->conversation_id = $conversationId;
        $startLoopMessage->message_id = $messageId;
        $startLoopMessage->count = 1;
        $startLoopMessage->save();
        return $startLoopMessage;
    }

    public function conversation()
    {
        return $this->hasOne(Conversation::class, 'id', 'conversation_id');
    }

    /**
     * Esta função incrementa +1 contador
     * @param StartLoopMessages $startLoopMessage
     * @return StartLoopMessages
     */
    public static function incrementCount(StartLoopMessages $startLoopMessage)
    {
        $startLoopMessage->count += 1;
        $startLoopMessage->update();
    }
}
