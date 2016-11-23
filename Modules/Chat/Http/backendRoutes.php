<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/chat'], function (Router $router) {
    $router->bind('chat', function ($id) {
        return app('Modules\Chat\Repositories\ChatRepository')->find($id);
    });
    $router->get('chats', [
        'as' => 'admin.chat.chat.index',
        'uses' => 'ChatController@index',
        'middleware' => 'can:chat.chats.index'
    ]);
    $router->get('chats/create', [
        'as' => 'admin.chat.chat.create',
        'uses' => 'ChatController@create',
        'middleware' => 'can:chat.chats.create'
    ]);
    $router->post('chats', [
        'as' => 'admin.chat.chat.store',
        'uses' => 'ChatController@store',
        'middleware' => 'can:chat.chats.store'
    ]);
    $router->get('chats/{chat}/edit', [
        'as' => 'admin.chat.chat.edit',
        'uses' => 'ChatController@edit',
        'middleware' => 'can:chat.chats.edit'
    ]);
    $router->put('chats/{chat}', [
        'as' => 'admin.chat.chat.update',
        'uses' => 'ChatController@update',
        'middleware' => 'can:chat.chats.update'
    ]);
    $router->delete('chats/{chat}', [
        'as' => 'admin.chat.chat.destroy',
        'uses' => 'ChatController@destroy',
        'middleware' => 'can:chat.chats.destroy'
    ]);
// append

});
