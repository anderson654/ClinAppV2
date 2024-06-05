<?php

namespace App\Models\Questions;

use App\Models\SurveyResponse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionSurvey extends Model
{
    use HasFactory;

    public function survey_response()
    {
        return $this->hasOne(SurveyResponse::class, 'survey_id', 'id');
    }
}
