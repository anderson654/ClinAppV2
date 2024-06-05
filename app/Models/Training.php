<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Training extends Model
{
    use HasFactory;

    protected $hidden = ["created_at", "updated_at", "deleted_at", "responsable_user_id", "author_user_id", "prerequisite_training_id", "release_order", "training_category_id", "mandatory", "lifetime"];

    public function survey_trainings()
    {
        return $this->hasMany(SurveyTraining::class, 'training_id');
    }

    public function completed_training()
    {
        return $this->hasOne(CompletedTraining::class, 'training_id', 'id')->where('professional_id', Auth::user()->id)->where('status_id', 3);
    }

    public function complet_trainings_by_user()
    {
        return $this->hasOne(CompletedTraining::class, 'training_id', 'id')->where('professional_id', Auth::user()->id)->where('status_id', 3)->select('training_id', 'status_id', 'professional_id');
    }

    public function total_avaliables()
    {
        return $this->hasOne(TrainingsFeedback::class, 'training_id', 'id')->select('training_id', 'id', 'rate');
    }
    public function total_likes()
    {
        return $this->hasMany(TrainingsFeedback::class, 'training_id', 'id')->where('rate', 1)->select('training_id', 'id', 'rate');
    }
    public function total_views()
    {
        return $this->hasMany(CompletedTraining::class, 'training_id', 'id')->select('training_id', 'id');
    }
    public function category()
    {
        return $this->hasOne(TrainingCategory::class, 'id', 'training_category_id');
    }
}
