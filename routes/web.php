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
    return $router->app->version();
});

$router->get('customers', function(){
    return 'TDD is fucking love';
});

$router->get('ss', function ()
{
  $result = app('importer')->fetch();

  dd($result);

});

$router->get('customers/{id}', function($id) {
    return $id;
});