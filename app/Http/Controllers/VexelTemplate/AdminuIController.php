<?php

namespace App\Http\Controllers\VexelTemplate;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminuIController extends Controller
{
    public function cards()
    {
        return view('vexeltemplate.cards');
    }

    public function calendar2()
    {
        return view('vexeltemplate.calendar2');
    }

    public function chat()
    {
        return view('vexeltemplate.chat');
    }

    public function notify()
    {
        return view('vexeltemplate.notify');
    }

    public function sweetalert()
    {
        return view('vexeltemplate.sweetalert');
    }

    public function rangeslider()
    {
        return view('vexeltemplate.rangeslider');
    }

    public function scroll()
    {
        return view('vexeltemplate.scroll');
    }

    public function loaders()
    {
        return view('vexeltemplate.loaders');
    }

    public function rating()
    {
        return view('vexeltemplate.rating');
    }

    public function timeline()
    {
        return view('vexeltemplate.timeline');
    }

    public function treeview()
    {
        return view('vexeltemplate.treeview');
    }

    public function ribbons()
    {
        return view('vexeltemplate.ribbons');
    }

    public function swiper()
    {
        return view('vexeltemplate.swiper');
    }

    public function users_list()
    {
        return view('vexeltemplate.users-list');
    }

    public function search()
    {
        return view('vexeltemplate.search');
    }

}
