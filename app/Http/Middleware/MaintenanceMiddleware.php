<?php

namespace App\Http\Middleware;

use Closure;

class MaintenanceMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        if ( config('application.maintenance') ) {
            return response()->json(['message' => 'Il server è in manutenzione'], 503);
        }

        return $next($request);
    }
}
