<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->group(['prefix' => 'place'], function (Router $router) {
    $locale = LaravelLocalization::setLocale() ?: App::getLocale();
    $router->get('index', ['as' => 'place.index', 'uses' => 'PublicController@index']);

    /*

    $router->get('list', ['as' => 'place.list', 'uses' => 'PublicController@list']);
    $router->get('show/{slug?}', ['as' => 'place.show', 'uses' => 'PublicController@show']);
    */
});

