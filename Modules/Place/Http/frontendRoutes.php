<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->group(['prefix' => 'place'], function (Router $router) {
    $locale = LaravelLocalization::setLocale() ?: App::getLocale();
    $router->get('index', ['as' => 'place.index', 'uses' => 'PublicController@index']);
    $router->get('store', ['as' => 'place.store', 'uses' => 'PublicController@store']);
    $router->get('show/{slug?}', ['as' => 'place.show', 'uses' => 'PublicController@show']);
});

