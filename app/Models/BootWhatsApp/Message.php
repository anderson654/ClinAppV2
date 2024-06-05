<?php

namespace App\Models\BootWhatsApp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $connection = 'db_whats';

    use HasFactory;

    /**
     * verifica se existe uma resposta para a mensagem.
     * @param Message $message
     * @return bool
     */
    public function group_response_to_message()
    {
        return $this->hasMany(GroupResponsesToMessage::class, 'message_id', 'id');
    }
}
