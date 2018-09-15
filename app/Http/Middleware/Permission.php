<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Permission
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
        if (!Auth::check()) {
            return redirect()->route('permission');
        }
        $current_route = $request->route()->getName();
        $user_permissions = Auth::user()->getUserPermissions();
        if (!in_array($current_route, $user_permissions)) {
            return redirect()->route('permission');
        }
        
        return $next($request);
    }
}
