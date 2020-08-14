<?php

namespace App\Http\Middleware;

use App\Traits\HasRolesAndPermissions;
use Closure;
class RoleMiddleware
{
    use HasRolesAndPermissions;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {
            if(auth()->user()->hasRole($role)) {
                return $next($request);
            }
        }
        abort(404);
    }
}