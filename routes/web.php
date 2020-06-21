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

$router->get('/api/districts','District\DistrictController@index');
$router->get('/api/districts/{id}','District\DistrictController@show');
$router->post('/api/districts','District\DistrictController@store');
$router->put('/api/districts/{id}','District\DistrictController@update');
$router->delete('/api/districts/{id}','District\DistrictController@destroy');

$router->get('/api/districts/location','District\DistrictController@DistLoc');


$router->get('/api/locations','Location\LocationController@index');
$router->get('/api/locations/{id}','Location\LocationController@show');
$router->post('/api/locations','Location\LocationController@store');
$router->put('/api/locations/{id}','Location\LocationController@update');
$router->delete('/api/locations/{id}','Location\LocationController@destroy');

$router->get('/api/shops','Shop\ShopController@index');
$router->get('/api/shops/{id}','Shop\ShopController@show');
$router->post('/api/shops','Shop\ShopController@store');
$router->put('/api/shops/{id}','Shop\ShopController@update');
$router->delete('/api/shops/{id}','Shop\ShopController@destroy');

