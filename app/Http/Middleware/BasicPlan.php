<?php

namespace App\Http\Middleware;

use App\Models\ProfessionalsPlan;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasicPlan
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
        if (!in_array($plan->professional_subscription_plan_id, [2, 3, 4]) || $plan->status_id != 1) {
            return response()->json('Unauthorized', 401);
        }
        return $next($request);
    }
}
