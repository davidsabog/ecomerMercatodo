<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$permission)
    {
        if(Auth::guest()){
            return redirect('/welcome');  
        }
        if($request->user()->can($permission))
        {
            return redirect('/admin');
            abort(403);
        }
        return $next($request);
    }

}
