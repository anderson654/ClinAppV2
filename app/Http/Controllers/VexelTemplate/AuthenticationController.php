<?php

namespace App\Http\Controllers\VexelTemplate;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('vexeltemplate.login');
    }

    public function register()
    {
        return view('vexeltemplate.register');
    }

    public function forgot_password()
    {
        return view('vexeltemplate.forgot-password');
    }

    public function lockscreen()
    {
        return view('vexeltemplate.lockscreen');
    }

    public function under_maintenance()
    {
        return view('vexeltemplate.under-maintenance');
    }

    public function error400()
    {
        return view('vexeltemplate.error400');
    }

    public function error401()
    {
        return view('vexeltemplate.error401');
    }

    public function error403()
    {
        return view('vexeltemplate.error403');
    }

    public function error404()
    {
        return view('vexeltemplate.error404');
    }

    public function error500()
    {
        return view('vexeltemplate.error500');
    }

    public function error503()
    {
        return view('vexeltemplate.error503');
    }

}
