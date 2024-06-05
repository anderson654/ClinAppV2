<?php

namespace App\Http\Controllers\VexelTemplate;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UikitController extends Controller
{
    
    public function alerts()
    {
        return view('vexeltemplate.alerts');
    }

    public function buttons()
    {
        return view('vexeltemplate.buttons');
    }

    public function colors()
    {
        return view('vexeltemplate.colors');
    }

    public function avatars()
    {
        return view('vexeltemplate.avatars');
    }

    public function dropdown()
    {
        return view('vexeltemplate.dropdown');
    }

    public function listgroup()
    {
        return view('vexeltemplate.listgroup');
    }

    public function tags()
    {
        return view('vexeltemplate.tags');
    }

    public function pagination()
    {
        return view('vexeltemplate.pagination');
    }

    public function navigation()
    {
        return view('vexeltemplate.navigation');
    }

    public function typography()
    {
        return view('vexeltemplate.typography');
    }

    public function breadcrumbs()
    {
        return view('vexeltemplate.breadcrumbs');
    }

    public function badge()
    {
        return view('vexeltemplate.badge');
    }

    public function offcanvas()
    {
        return view('vexeltemplate.offcanvas');
    }

    public function toast()
    {
        return view('vexeltemplate.toast');
    }

    public function scrollspy()
    {
        return view('vexeltemplate.scrollspy');
    }

    public function mediaobject()
    {
        return view('vexeltemplate.mediaobject');
    }

    public function accordion()
    {
        return view('vexeltemplate.accordion');
    }

    public function tabs()
    {
        return view('vexeltemplate.tabs');
    }

    public function modal()
    {
        return view('vexeltemplate.modal');
    }

    public function tooltipandpopover()
    {
        return view('vexeltemplate.tooltipandpopover');
    }

    public function progress()
    {
        return view('vexeltemplate.progress');
    }

    public function carousel()
    {
        return view('vexeltemplate.carousel');
    }

}
