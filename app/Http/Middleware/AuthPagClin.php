<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class AuthPagClin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('TokenPagClin');
        // $token = $request->token_pag_clin;
        if ($token) {
            // $token = str_replace('Bearer ', '', $token);
            $personalAccessToken = PersonalAccessToken::findToken($token);
            // return response()->json($personalAccessToken);
            // //verificar se o token ja expirou
            // if ($personalAccessToken->updated_at > Carbon::now()->addSeconds(120)) {
            //     return response()->json(['message' => 'Token expirado.'], 422);
            // }
            // return response()->json(['message' => $personalAccessToken->plainTextToken]);

            if (!($personalAccessToken && Auth::guard('sanctum')->check())) {
                // O token é inválido ou não autenticado
                // ..
                return response()->json(['message' => 'Unauthenticate'], 401);
            }
        } else {
            // O token não foi fornecido na solicitação
            // ...
            return response()->json(['message' => 'token_pag_clin não informado'], 401);
        }
        return $next($request);
    }
}
