<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class VisitorMiddleware
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
        $role = Auth::user()->role;
        if($role == 'Visitor'){
            return $next($request);
        }

        return view('auth.login');
    }
}
