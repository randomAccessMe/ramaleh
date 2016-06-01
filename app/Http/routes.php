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
    $router->get('/', ['as' => 'blank', 'uses' => 'AdminController@blank']);
    $router->resource('/site', 'SiteController');
    $router->get('/resume', ['as' => 'resume', 'uses' => 'ResumeController@index']);
    $router->get('logs', ['as' => 'log', 'uses' => 'LogController@index']);
    $router->get('resume', ['as' => 'resume', 'uses' => 'ResumeController@create']);
    $router->post('resume', ['as' => 'resume', 'uses' => 'ResumeController@store']);
    $router->get('experience', ['as' => 'experience', 'uses' => 'ExperienceController@create']);
    $router->post('experience', ['as' => 'experience', 'uses' => 'ExperienceController@store']);
    $router->get('skills', ['as' => 'skills', 'uses' => 'SkillsController@edit']);
    $router->post('skills', ['as' => 'skills', 'uses' => 'SkillsController@store']);
});

Route::get('/home', 'HomeController@index');
