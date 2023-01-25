<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {

        if (Auth::check() && Auth::user()->tipe == 1) {
            return $next ($request);
        } else if (Auth::check() && Auth::user()->tipe == 0) {
            return $next($request);
        } 

        return Redirect::route('login');

        // if (! $request->expectsJson()) {
        //     return route('login');
        // }
    }
}
