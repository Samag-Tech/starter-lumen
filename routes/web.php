<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Jobs\ExampleJob;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Route;

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

$router->group(['prefix' => 'auth'], function () use ($router) {
    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
    $router->get('profile', 'AuthController@profile');
});
