<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingsFeedback extends Model
{
    use HasFactory;
    protected $table = 'trainings_feedbacks';
    protected $fillable = ['user_id', 'training_id', 'rate'];
}
