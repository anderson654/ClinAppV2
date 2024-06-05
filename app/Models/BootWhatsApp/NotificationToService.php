<?php

namespace App\Models\BootWhatsApp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationToService extends Model
{
    protected $connection = 'db_whats';
    
    use HasFactory;
}
