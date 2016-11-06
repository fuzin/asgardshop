<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/socialmedia'], function (Router $router) {
    $router->get('index', ['as' => 'socialmedia.index', 'uses' => 'PublicController@index']);
});
