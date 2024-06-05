<?php

namespace App\Http\Middleware;

use App\Models\ProfessionalsPlan;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProMasterPlan
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
        $plan = ProfessionalsPlan::where('user_id', $user->id)->where('status_id',1)->whereIn('professional_subscription_plan_id',[4])->first();
        if (!$plan) {
            return response()->json('Unauthorized', 401);
        }
        return $next($request);
    }
}
