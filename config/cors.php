<?php

/**
 * Configurazione per gli header del CORS
 *
 */
return [

    //---------------------------------------------------------------------------------------------------

    /**
     * Impostazione per l'header Access-Control-Allow-Origin
     *
     */
    'origin'    =>  env('ACCESS_CONTROL_ALLOW_ORIGIN', '*'),

    //---------------------------------------------------------------------------------------------------

    /**
     * Impostazione per l'header Access-Control-Allow-Methods
     *
     */
    'methods'   =>  env('ACCESS_CONTROL_ALLOW_METHODS', 'POST, GET, OPTIONS, PUT, DELETE'),

    //---------------------------------------------------------------------------------------------------

    /**
     * Impostazione per l'header Access-Control-Allow-Headers
     *
     */
    'headers'   => env('ACCESS_CONTROL_ALLOW_HEADERS', 'Content-Type, Authorization, X-Requested-With, X-API-KEY')
];