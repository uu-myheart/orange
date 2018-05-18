<?php

$app['router']->get('/', function () {
	return 'Hello, lara-fold';
});

$app['router']->get('/welcome', 'App\Http\Controllers\IndexController@welcome');

$app['router']->post('/', 'App\Http\Controllers\IndexController@create');

$app['router']->get('users', 'App\Http\Controllers\UserController@index');



