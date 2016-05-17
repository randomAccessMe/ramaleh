<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$router->group([
    'middleware' => 'web',
    'prefix'     => 'admin',
    'namespace'  => 'Admin',
    'as'         => 'admin::',
], function ($router) {
    $router->get('/',              ['as' => 'blank',     'uses' => 'AdminController@blank']);
    $router->resource('/site',    'SiteController');
    $router->get('/resume',        ['as' => 'resume',        'uses' => 'ResumeController@index']);
});

Route::get('/home', 'HomeController@index');