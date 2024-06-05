<?php

namespace App\Http\Controllers\VexelTemplate;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form_elements()
    {
        return view('vexeltemplate.form-elements');
    }

    public function form_layouts()
    {
        return view('vexeltemplate.form-layouts');
    }

    public function form_advanced()
    {
        return view('vexeltemplate.form-advanced');
    }

    public function form_editor()
    {
        return view('vexeltemplate.form-editor');
    }

    public function form_validation()
    {
        return view('vexeltemplate.form-validation');
    }

    public function form_input_spinners()
    {
        return view('vexeltemplate.form-input-spinners');
    }

    public function select_2()
    {
        return view('vexeltemplate.select-2');
    }

}
