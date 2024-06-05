<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EnsureIsUserOrAdmin
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
        $validator = Validator::make($request->all(), [
            "user_id" => "required"
        ]);

        if ($validator->fails()) {
            return response()->json([$validator->errors()], 422);
        }

        $loggedUser = Auth::user();

        // If the authenticated user is the user_id itself, save the salesman_id (who requested) as where the request is coming from

        if ($loggedUser->id == $request->user_id) {
            $request->salesman_id = $request->cod_source ?? $request->user_id;
        } else {
            $request->salesman_id = $loggedUser->id ?? 2;
        }

        if (!($loggedUser->id == $request->user_id || in_array($loggedUser->role_id, [0, 1, 6, 7]))) {
            return response()->json(["message" => "Unauthorized"], 401);
        }
        return $next($request);
    }
}
