<?php

namespace App\Models\BootWhatsApp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $connection = 'db_whats';

    use HasFactory;
    /**
     * Verifica se o user esta em uma converça
     * @param int $userId
     * @return Conversation
     */
    public static function verifyUserInConversation($userId)
    {
        return Conversation::where('user_id', $userId)->where('status_conversation_id', 1)->first();
    }
    /**
     * Abre uma converça o o user determinado
     * @param int $userId
     * @param int $messageId
     * @return Conversation
     */
    public static function openConversation($userId, $messageId)
    {
        $conversation = new Conversation();
        $conversation->user_id = $userId;
        $conversation->message_id = $messageId;
        $conversation->status_conversation_id = 1;
        $conversation->save();
        return $conversation;
    }

    public function message()
    {
        return $this->hasOne(Message::class, 'id', 'message_id');
    }

    public function updateConversationMessage($messageId)
    {
        $this->message_id = $messageId;
        return $this->update();
    }

    public function closeConversation()
    {
        $this->status_conversation_id = 2;
        return $this->update();
    }

    public function conversation_to_service()
    {
        return $this->hasOne(ConversationsToService::class, 'conversation_id', 'id');
    }

    public static function updateManualyConversationMessage(Conversation $conversation, $messageId)
    {
        $conversation->message_id = $messageId;
        return $conversation->update();
    }

    public static function closeManualyConversation(Conversation $conversation)
    {
        $conversation->status_conversation_id = 2;
        return $conversation->update();
    }
}
