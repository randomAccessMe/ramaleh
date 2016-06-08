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
    'prefix'     => 'admin',
    'namespace'  => 'Admin',
    'as'         => 'admin::',
    'middleware' => 'auth',
], function ($router) {
    $router->get('/', ['as' => 'dashboard', 'uses' => 'AdminController@dashboard']);
    $router->get('resume', ['as' => 'resume', 'uses' => 'ResumeController@index']);
    $router->get('resume', ['as' => 'resume', 'uses' => 'ResumeController@edit']);
    $router->get('resume/info', ['as' => 'resume.info', 'uses' => 'ResumeController@show']);
    $router->get('experience', ['as' => 'experience', 'uses' => 'ExperienceController@edit']);
    $router->get('skills', ['as' => 'skills', 'uses' => 'SkillsController@edit']);
    $router->get('logs', ['as' => 'log', 'uses' => 'LogController@index']);
    $router->resource('/site', 'SiteController');
});

$router->group([
    'prefix'     => 'admin',
    'namespace'  => 'Admin',
    'as'         => 'admin::',
    'middleware' => ['auth', 'acl'],
    'is'         => 'administrator',
], function ($router) {
    $router->post('resume', ['as' => 'resume.update', 'uses' => 'ResumeController@update']);
    $router->post('experience', ['as' => 'experience.update', 'uses' => 'ExperienceController@update']);
    $router->post('skills', ['as' => 'skills.update', 'uses' => 'SkillsController@update']);
    $router->get('skill/{skill}/delete', ['as' => 'skills.delete', 'uses' => 'SkillsController@destroy']);
    $router->get('experience/{job}/delete', ['as' => 'experience.delete', 'uses' => 'ExperienceController@destroy']);
});


$router->get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
$router->get('/resume', ['as' => 'resume', 'uses' => 'HomeController@resume']);
$router->post('/contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);

Route::auth();

