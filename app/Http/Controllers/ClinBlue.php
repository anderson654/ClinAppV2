<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClinBlue extends Controller
{
    //
    public function saveDocuments(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->cpf = $request->cpf;
        $user->rg = $request->rg;
        $user->state = $request->state;
        $user->om = $request->om;
        $user->dte = $request->dte;
        $user->nameMother = $request->nameMother;
        $user->dteNsc = $request->dteNsc;
        $user->cep = $request->cep;
        $user->road = $request->road;
        $user->neighborhood = $request->neighborhood;
        $user->number = $request->number;
        $user->complement = $request->complement;
    }
}
