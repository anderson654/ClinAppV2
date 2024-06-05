<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\Controller;
use App\Models\Questions\QuestionSurvey;
use App\Models\SurveyResponse;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionSurveysController extends Controller
{
    //
    public function questionSurveys()
    {
        $userId = Auth::user()->id;

        $questionsAvaliables = QuestionSurvey::where('status', 'ativa')->whereHas('survey_response', function (Builder $query) use ($userId) {
            $query->where('user_id', $userId);
        })->get()->pluck('id');

        $questionsNotAvaliables = QuestionSurvey::where('status', 'ativa')->whereNotIn('id', $questionsAvaliables)->get();

        return response()->json(["surveys" => $questionsNotAvaliables]);
    }
    public function saveQuestionSurveys(Request $request)
    {
        $userId = Auth::user()->id;
        $surveyResponse = new SurveyResponse();
        $surveyResponse->user_id = $userId;
        $surveyResponse->survey_id = $request->survey_id;
        $surveyResponse->answer = $request->answer;
        $surveyResponse->save();
        return response()->json(["message" => "sucess"]);
    }
}
