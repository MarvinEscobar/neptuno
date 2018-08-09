<?php

namespace App\Http\Middleware;

use Closure;

class ValidateLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        //if ($request->idrol >=18)
        // if ($roles === '1')
        // {
        //     return $next($request);
        // }
        // else
        // {
        //     return redirect()->route("auth.login");
        // }
       
    }
}
