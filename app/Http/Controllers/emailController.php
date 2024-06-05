<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\confirmRegisterMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class emailController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendConfirmEmail(Request $request)
    {
        $title = 'Bem vindo a clin.';
        return $this->mailModel($request, $title);
    }
    public function resetPassword(Request $request)
    {
        $title = 'Pedido para troca de senha realizado, se você não solicitou apenas ignore esse e-mail.';
        return $this->mailModel($request, $title);
    }



    private function mailModel($request, $title)
    {
        $nameAndEmail = User::withTrashed()->where('email', $request->email)->select('name', 'email')->first();
        if ($nameAndEmail) {
            try {
                Mail::send(new confirmRegisterMail($nameAndEmail, $title));
                return response()->json([
                    'message' => 'Enviamos um código para seu email.'
                ], 200);
            } catch (\Throwable $th) {
                return $th;
                return response()->json([
                    'message' => 'Erro ao enviar pedido, tente novamente mais tarde.'
                ], 400);
            }
        } else {
            return response()->json([
                'message' => 'Email não encontrado'
            ], 400);
        }
    }
}
