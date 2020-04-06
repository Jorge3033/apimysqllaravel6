<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class user
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
        $user=\App\User::find(Auth::user()->id)->authorizeRoles(['user','admin']);

        if ($user) {
            return $next($request);
        }else{
            return response()
                ->json(['error' => 'Usuario no autirizado', 'code' => '401']);
        }
        //return $next($request);
    }
}
