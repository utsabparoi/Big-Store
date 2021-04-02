<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        $region = ['asia', 'europe', 'australia'];
        if(!in_array($request->region, $region)){
            return redirect()->to('/');
        } else {
            echo 'Authorized';
        }
        return $next($request);
    }
}
