<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeiOpeningRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status_ask',
        'status_mei'
    ];
}
