<?php

namespace App\Http\Controllers\VexelTemplate;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ChartsController extends Controller
{
    public function chart_chartist()
    {
        return view('vexeltemplate.chart-chartist');
    }

    public function chart_echart()
    {
        return view('vexeltemplate.chart-echart');
    }

    public function chart_apex()
    {
        return view('vexeltemplate.chart-apex');
    }

}
