<?php

namespace App\Http\Controllers\VexelTemplate;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function maps1()
    {
        return view('vexeltemplate.maps1');
    }

    public function maps2()
    {
        return view('vexeltemplate.maps2');
    }

    public function maps()
    {
        return view('vexeltemplate.maps');
    }

}
