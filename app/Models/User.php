<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

/**
 * Modello per la gestione dell'utente
 *
 */
class User extends Model implements AuthenticatableContract, AuthorizableContract, JWTSubject {

    use Authenticatable, Authorizable;

    protected $hidden = [
        'password'
    ];

    /**
     * Restituisce la chiave identificativa per il JWT
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    //---------------------------------------------------------------------------------------------------

    /**
     * Restituisce i dati aggiuntivi da aggiungere nel JWT
     *
     * @return array
     */
    public function getJWTCustomClaims() : array {

        $user = auth()->user();

        return [
            'name'  => $user->name,
            'email' => $user->email,
        ];
    }
}