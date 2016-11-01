<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/place'], function (Router $router) {
    $router->bind('place', function ($id) {
        return app('Modules\Place\Repositories\PlaceRepository')->find($id);
    });
    $router->get('places', [
        'as' => 'admin.place.place.index',
        'uses' => 'PlaceController@index',
        'middleware' => 'can:place.places.index'
    ]);
    $router->get('places/create', [
        'as' => 'admin.place.place.create',
        'uses' => 'PlaceController@create',
        'middleware' => 'can:place.places.create'
    ]);
    $router->post('places', [
        'as' => 'admin.place.place.store',
        'uses' => 'PlaceController@store',
        'middleware' => 'can:place.places.store'
    ]);
    $router->get('places/{place}/edit', [
        'as' => 'admin.place.place.edit',
        'uses' => 'PlaceController@edit',
        'middleware' => 'can:place.places.edit'
    ]);
    $router->put('places/{place}', [
        'as' => 'admin.place.place.update',
        'uses' => 'PlaceController@update',
        'middleware' => 'can:place.places.update'
    ]);
    $router->delete('places/{place}', [
        'as' => 'admin.place.place.destroy',
        'uses' => 'PlaceController@destroy',
        'middleware' => 'can:place.places.destroy'
    ]);
// append

});
