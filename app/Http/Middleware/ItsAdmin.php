<?php

namespace App\Http\Middleware;

use Closure;

class ItsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && !$request->user()->admin) {
            return redirect()->route('dashboardpeserta');
        }
        return $next($request);
    }
}
