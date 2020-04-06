<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class admin
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
        $admin=\App\User::find(Auth::user()->id)->authorizeRoles('admin');

        if ($admin) {
            return $next($request);
        }else{
            return response()
                ->json(['error' => 'Usuario no autirizado', 'code' => '401']);
        }

    }
}
