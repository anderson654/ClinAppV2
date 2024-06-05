<?php

namespace App\Http\Controllers;

use App\Models\PushToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PushNotificationController extends Controller
{
    //
    public function savePushNotificationToken(Request $request)
    {
        $saveToken = PushToken::updateOrCreate(
            ['user_id' => Auth::user()->id],
            ['token' => $request->token]
        );
        return response()->json(["message" => "Token salvo com sucecsso"], 200);
        // $tokenPush = $request->token;
    }
}
