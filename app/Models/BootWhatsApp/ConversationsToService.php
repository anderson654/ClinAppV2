<?php

namespace App\Models\BootWhatsApp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConversationsToService extends Model
{
    protected $connection = 'db_whats';

    use HasFactory;

    public static function saveReference($conversationId, $serviceId)
    {
        $conversationToService = new ConversationsToService();
        $conversationToService->conversation_id = $conversationId;
        $conversationToService->service_id = $serviceId;
        $conversationToService->save();
        return $conversationToService;
    }
}
