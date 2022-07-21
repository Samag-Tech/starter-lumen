<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Lumen\Routing\Controller;

/**
 * Controller per l'autenticazione di base.
 *
 */
class AuthController extends Controller {

    //---------------------------------------------------------------------------------------------------

    /**
     * Costruttore.
     *
     */
    public function __construct() {

        // Aggiunto middlware per questo controller
        $this->middleware('auth:api', ['except' => ['login', 'refresh', 'logout']]);
    }

    //---------------------------------------------------------------------------------------------------

    /**
     * Restituisce il JWT se il login viene effettuato
     * altrimenti il messaggio di errore
     *
     * @param  Request  $request
     *
     * @return Response
     */
    public function login(Request $request) {

        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (! $token = Auth::attempt($credentials)) {
            return respondFail(__('response.error_access'), 400);
        }

        return $this->respondWithToken($token);
    }

    //---------------------------------------------------------------------------------------------------

    /**
     * Restituisce il profilo dell'utente autenticato
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile () {
        return response()->json(auth()->user());
    }

    //---------------------------------------------------------------------------------------------------

    /**
     * Esegue il logout dell'utente
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() {

        auth()->logout();

        return response()->json(['message' => 'Logout effettuato']);
    }

    //---------------------------------------------------------------------------------------------------

    /**
     * Refresh del token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->respondWithToken(auth()->refresh(true));
    }

    //---------------------------------------------------------------------------------------------------

    /**
     * Restituisce la struttura della risposta
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken(string $token) {

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60 * 24
        ]);
    }
}