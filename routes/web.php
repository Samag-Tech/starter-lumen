<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Jobs\ExampleJob;
use Illuminate\Support\Facades\Queue;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'ExampleController@index');
$router->get('/{id}', 'ExampleController@show');
$router->post('/', 'ExampleController@store');
$router->put('/{id}', 'ExampleController@update');
$router->delete('/', 'ExampleController@delete');


