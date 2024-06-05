<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDayofweek extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'dayofweek'];
    protected $hidden = [];

}
