<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/site'], function (Router $router) {
    $router->bind('site', function ($id) {
        return app('Modules\Site\Repositories\SiteRepository')->find($id);
    });
    $router->get('sites', [
        'as' => 'admin.site.site.index',
        'uses' => 'SiteController@index',
        'middleware' => 'can:site.sites.index'
    ]);
    $router->get('sites/create', [
        'as' => 'admin.site.site.create',
        'uses' => 'SiteController@create',
        'middleware' => 'can:site.sites.create'
    ]);
    $router->post('sites', [
        'as' => 'admin.site.site.store',
        'uses' => 'SiteController@store',
        'middleware' => 'can:site.sites.create'
    ]);
    $router->get('sites/{site}/edit', [
        'as' => 'admin.site.site.edit',
        'uses' => 'SiteController@edit',
        'middleware' => 'can:site.sites.edit'
    ]);
    $router->put('sites/{site}', [
        'as' => 'admin.site.site.update',
        'uses' => 'SiteController@update',
        'middleware' => 'can:site.sites.edit'
    ]);
    $router->delete('sites/{site}', [
        'as' => 'admin.site.site.destroy',
        'uses' => 'SiteController@destroy',
        'middleware' => 'can:site.sites.destroy'
    ]);
// append

});
