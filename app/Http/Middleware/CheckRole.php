<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $roles = array_slice(func_get_args(), 2);

        if(Auth::check()){
            $user = Auth::user();
            foreach ($roles as $role) { 
                if( $user->role == $role){
                    return $next($request);
                }
            }
        }
        
        abort(404, 'Unauthorized action.');
    }
}
