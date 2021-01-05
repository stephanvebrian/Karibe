<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,... $roles)
    {
        if(Auth::check() == false) return redirect(route('home'));

        $user = Auth::user();

        // admin has highest privilege
        if($user->role == 'Admin') return $next($request);

        foreach($roles as $role) {
            // Check if user has the role supplied in routes
            if($user->role == $role) return $next($request);
        }

        return redirect(route('home'));
        // return back();
    }
}
