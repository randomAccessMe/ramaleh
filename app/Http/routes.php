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
    'prefix'    => 'admin',
    'namespace' => 'Admin',
    'as'        => 'admin::',
], function ($router) {
    $router->get('/',           ['as' => 'blank',   'uses' => 'AdminController@blank']);
    $router->get('/resume',     ['as' => 'resume',  'uses' => 'ResumeController@index']);
    $router->get('logs',        ['as' => 'log',     'uses' => 'LogController@index']);
    $router->resource('/site', 'SiteController');
});


//$router->group(['middleware' => 'guest'], function ($router) {
    $router->get('/',  ['as' => 'home', 'uses' => 'HomeController@index']);
//});
