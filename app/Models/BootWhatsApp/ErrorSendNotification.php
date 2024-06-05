<?php

namespace App\Models\BootWhatsApp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErrorSendNotification extends Model
{
    protected $connection = 'db_whats';

    use HasFactory;

    /**
     * Esta função cria um log de erro na tabela notifications.
     * @param int $notificationId
     * @param string $description uma breve descrição do erro.
     * @return bool
     */
    public static function logErrorNotification($notificationId, $description)
    {
        $errorNotification = new ErrorSendNotification();
        $errorNotification->notification_id = $notificationId;
        $errorNotification->description = $description;
        return $errorNotification->save();
    }
}
