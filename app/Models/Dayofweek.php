<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dayofweek extends Model
{
    protected $table = 'dayofweek';
    protected $fillable = ['id','user_id','domingo', 'segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado'];
    protected $hidden = ["created_at", "updated_at"];
    use HasFactory;
}
