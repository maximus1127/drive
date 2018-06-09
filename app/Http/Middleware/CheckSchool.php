<?php

namespace App\Http\Middleware;

use Closure;

class CheckSchool
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
        if ($request->user()->role == "school_admin" ||  $request->user()->role == "employee") {
            return $next($request);
        }
        return redirect("/");

    }
}
