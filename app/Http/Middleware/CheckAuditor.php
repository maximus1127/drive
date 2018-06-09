<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuditor
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
        if ($request->user()->role == "auditor_admin" || $request->user()->role == "auditor") {
            return $next($request);
        }
        return redirect("/");

    }
}
