<?php

namespace App\Models\BootWhatsApp;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $connection = 'db_whats';

    protected $appends = ['user'];

    use HasFactory;

    /**
     * Finaliza uma notificação
     * @param Notification $notification
     * @return bool
     */
    public static function closeNotification($notification)
    {
        $notification->status_notifications_id = 2;
        return $notification->update();
    }

    public static function errorNotification($notification)
    {
        $notification->status_notifications_id = 4;
        return $notification->update();
    }

    public function getUserAttribute()
    {
        return User::find($this->user_id) ?? null;
    }

    public function notification_to_service()
    {
        return $this->hasOne(NotificationToService::class, 'notification_id', 'id');
    }
}
