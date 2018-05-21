<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class EmailRedirectMiddleware
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
        $user = Auth::User();
        if(substr($user->email, -9) == "dalton@gmail.com")
        {
            return redirect('/admin.dashboard');
        }

        return $next($request);
    }
}
