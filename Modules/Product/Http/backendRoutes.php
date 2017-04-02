<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/product'], function (Router $router) {
    
    $router->bind('product', function ($id) {
        return app('Modules\Product\Repositories\ProductRepository')->find($id);
    });

    $router->get('products', [
        'as' => 'admin.product.product.index',
        'uses' => 'ProductController@index',
        'middleware' => 'can:product.products.index'
    ]);

    $router->get('products/create', [
        'as' => 'admin.product.product.create',
        'uses' => 'ProductController@create',
        'middleware' => 'can:product.products.create'
    ]);

    $router->post('products', [
        'as' => 'admin.product.product.store',
        'uses' => 'ProductController@store',
        'middleware' => 'can:product.products.store'
    ]);

    $router->get('products/{product}/edit', [
        'as' => 'admin.product.product.edit',
        'uses' => 'ProductController@edit',
        'middleware' => 'can:product.products.edit'
    ]);

    $router->put('products/{product}', [
        'as' => 'admin.product.product.update',
        'uses' => 'ProductController@update',
        'middleware' => 'can:product.products.update'
    ]);

    $router->delete('products/{product}', [
        'as' => 'admin.product.product.destroy',
        'uses' => 'ProductController@destroy',
        'middleware' => 'can:product.products.destroy'
    ]);

    // product attribute group
    $router->get('products/attribute', [
        'as' => 'admin.product.attribute.group.index',
        'uses' => 'AttributeController@index',
        'middleware' => 'can:product.products.attributes'
    ]);

    $router->get('products/attribute/create', [
        'as' => 'admin.product.attribute.group.create',
        'uses' => 'AttributeGroupController@create',
        'middleware' => 'can:product.products.attribute.group.create'
    ]);

    // product attributes
    $router->get('products/attribute', [
        'as' => 'admin.product.attribute.index',
        'uses' => 'AttributeController@index',
        'middleware' => 'can:product.products.attributes'
    ]);

    $router->get('products/attribute/create', [
        'as' => 'admin.product.attribute.create',
        'uses' => 'AttributeController@create',
        'middleware' => 'can:product.products.attribute.create'
    ]);



});
