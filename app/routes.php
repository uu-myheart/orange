<?php

route()->get('/', function () {
	return 'Hello, lara-fold';
});

route()->get('/welcome', 'App\Controllers\IndexController@welcome');

route()->post('/', 'App\Controllers\IndexController@create');

route()->get('users', 'App\Controllers\UserController@index');



