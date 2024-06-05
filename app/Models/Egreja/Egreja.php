<?php

namespace App\Models\Egreja;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreja extends Model
{
    use HasFactory;
    protected $connection = 'egreja_db';
}
