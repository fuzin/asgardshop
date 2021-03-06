<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->group(['prefix' => 'chat'], function (Router $router) {
    $locale = LaravelLocalization::setLocale() ?: App::getLocale();
    $router->get('index', ['as' => 'chat.index', 'uses' => 'PublicController@index']);
    $router->any('store', ['as' => 'chat.store', 'uses' => 'PublicController@store']);
    $router->any('room', ['as' => 'chat.room', 'uses' => 'PublicController@room']);
    $router->any('user', ['as' => 'chat.user', 'uses' => 'PublicController@user']);
});

