<?php

namespace App\Http\Middleware;

use App\Models\ProfessionalsPlan;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessionalPlan
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
        $user = Auth::user();
        $plan = ProfessionalsPlan::where('user_id', $user->id)->first();
        if (!$plan) {
            return response()->json('Unauthorized', 401);
        }
        return $next($request);
    }
}
