<?php

namespace App\Models;

use App\Models\Mail\TemplateEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailerSend extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'email_id',
        'order_id',
        'status',
        'template_id'
    ];
}
