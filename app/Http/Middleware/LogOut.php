<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LogOut
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

        if(Auth::guard('admin')->check() || Auth::guard('users')->check()){

            //  $guards = array_keys(config('auth.guards'));

            // $og_guard = "";
            // foreach ($guards as $guard) {
            //     if(Auth::guard($guard)->check())$og_guard = $guard;
            // }


            // if($og_guard == 'admin'){

            // }else{
            //     return redirect()->route('login.index');
            // }

             return $next($request);

        }else{

            return redirect()->route('login');

        }

       

        
    }
}
