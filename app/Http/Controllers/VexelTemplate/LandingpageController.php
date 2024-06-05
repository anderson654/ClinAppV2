<?php

namespace App\Http\Controllers\VexelTemplate;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function landing_page()
    {
        return view('vexeltemplate.landing-page');
    }

}
