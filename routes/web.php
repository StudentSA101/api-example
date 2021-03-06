<?php

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

$router->get('/api/v1/customer', 'CustomerController@index');

$router->get('/api/v1/customer/{id}', 'CustomerController@show');

$router->post('/api/v1/customer', 'CustomerController@store');

$router->patch('/api/v1/customer/{id}', 'CustomerController@update');

$router->delete('/api/v1/customer/{id}', 'CustomerController@delete');