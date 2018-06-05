<?php

namespace App\Http\Middleware;

use Closure;
use Log;
use Illuminate\Support\Facades\DB;

class AdminMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
//        if (true) {
//            return redirect('/login');
//        }

        return $next($request);
    }
}
