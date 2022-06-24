<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Middleware per la gestione del cors
 *
 */
class CorsMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        // Recupera la configurazione del cors
        app()->configure('cors');

        $headers = [
            'Access-Control-Allow-Origin' => config('cors.origin'),
            'Access-Control-Allow-Methods' => config('cors.methods'),
            'Access-Control-Allow-Headers' => config('cors.headers')
        ];

        if ($request->isMethod('OPTIONS')) {
            return response()->json(['message' => 'Ok'], 200, $headers);
        }

        $response = $next($request);

        foreach ($headers as $key => $value) {
            $response->header($key, $value);
        }

        return $response;
    }
}
