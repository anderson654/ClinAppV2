<?php

namespace App\Http\Middleware;

use App\Models\UserUuid;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DefaultSecurity
{
    /**
     *
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $uuid = $this->getUuid();
        if (!$uuid) {
            return response()->json(["message" => "Falha ao encontrar uuid"], 401);
        }
        if (!$request->header('x-signature')) {
            return response()->json(["message" => 'x-signature obrigatório'], 400);
        }
        $signatureMessage = $this->hashMessage($request, $uuid);
        if (!$signatureMessage) {
            return response()->json(["message" => "Erro na mensagem"], 401);
        }
        $signatureIsValid = $this->checkSignature($request, $signatureMessage);
        if (!$signatureIsValid) {
            return response()->json(["message" => "Assinatura invalida."], 401);
        }

        return $next($request);
    }

    public function getUuid()
    {
        $user = Auth::user();
        $userId_hash = hash_hmac('sha256', $user->created_at, $user->phone);

        $user_uuid = UserUuid::where('user_id', $userId_hash)->first()->uuid;
        return $user_uuid ?? false;
    }

    public function hashMessage(Request $request, $uuid)
    {
        $payload = json_encode($request->all());
        $hashMessage = hash_hmac('sha256', $payload, $uuid);

        return $hashMessage ?? false;
    }

    public function checkSignature(Request $request, $hashMessage)
    {
        return $request->header('x-signature') === $hashMessage;
    }
}
