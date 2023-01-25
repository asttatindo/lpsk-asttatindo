<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

class typeOf
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;

    public function __construct (Guard $auth) {
        $this->auth = $auth;
    }

    public function handle(Request $request, Closure $next)
    {

        if (isset($this->auth->user()->tipe)) {
            if ($this->auth->user()->tipe == 1) {
                return $next($request);
            } else if ($this->auth->user()->tipe == 0) {
                // return $next($request);
                return redirect ('user-dashboard');
            }
        }
        return redirect('login');
    }
}
