<?php

namespace App\Http\Controllers\VexelTemplate;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function tables()
    {
        return view('vexeltemplate.tables');
    }

    public function datatable()
    {
        return view('vexeltemplate.datatable');
    }

    public function grid_tables()
    {
        return view('vexeltemplate.grid-tables');
    }

}
