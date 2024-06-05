<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppProfessionalConfig extends Controller
{
    //
    public function infoAppProfessionals(){
        $data = [
            "version_android" => env("APP_PEOFESSIONALS_ANDROID_VERSION"),
            "version_ios" => env("APP_PEOFESSIONALS_IOS_VERSION")
        ];
        return response()->json($data,200);
    }
}
