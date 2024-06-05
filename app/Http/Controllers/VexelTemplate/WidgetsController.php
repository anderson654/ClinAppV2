<?php

namespace App\Http\Controllers\VexelTemplate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WidgetsController extends Controller
{
    public function widgets()
    {
        return view('vexeltemplate.widgets');
    }

}
