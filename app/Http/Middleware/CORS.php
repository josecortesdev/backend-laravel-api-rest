<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CORS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        header('Acess-Control-Allow-Origin: *');
        header('Acess-Control-Allow-Origin: Content-type, X-Auth-Token, Authorization, Origin');
        //nuevo
        header('Vary: Origin, Access-Control-Request-Headers, Access-Control-Request-Method');
        
        return $next($request)->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}
