<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if($role === 'admin'){
            if(!Auth::check()){
                return redirect()->route('AdminLogin');
            }else{
                if(Auth::User()->role != $role){
                    return redirect()->route('home');
                }
            }
        }


        return $next($request);
    }


}
