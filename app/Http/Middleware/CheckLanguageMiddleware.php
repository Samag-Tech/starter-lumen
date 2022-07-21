<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Controlla la lingua da utilizzare in
 * base al header Accept-Language se passato
 *
 */
class CheckLanguageMiddleware {


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next) {

        if ( $request->hasHeader('Accept-Language') ) {
            app()->setLocale($request->header('Accept-Language'));
        }

        return $next($request);
    }
}