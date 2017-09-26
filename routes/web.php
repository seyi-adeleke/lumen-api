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

$router->get('/', function () use ($router) {
    return 'hello world';
});


// $router->get('/{id}', 'HomeController@someMethod');

$router->get('/foo', 'HomeController@usersPosts');

$router->get('/{id}', 'HomeController@getUsersPosts');

$router->post('/newuser', 'HomeController@createNewUser');