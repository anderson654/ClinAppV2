<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedTraining extends Model
{
    use HasFactory;
    protected $fillable = ['professional_id', 'expiration_date', 'training_id', 'time_stopped', 'status_id', 'hits', 'release_order'];
}
