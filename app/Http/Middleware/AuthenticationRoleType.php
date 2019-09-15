<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class AuthenticationRoleType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if(!Auth::check()){
            return redirect()->route('books.all');
        }
        $user = Auth::user();

        if(is_array($roles)){
            foreach($roles as $role){
                if($user->hasRole($role))
                    return $next($request);
            }
        }else {
            if($user->hasRole($roles))
                return $next($request);
        }
        return redirect()->route('books.all');
    }
}
