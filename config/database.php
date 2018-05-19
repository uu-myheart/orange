<?php

return [
	'driver' => 'mysql',
	'host' => env('DB_HOST', 'localhost'),
	'database' => env('DB_DATABASE', 'homestead'),
	'username' => env('DB_USERNAME', 'root'),
	'password' => env('DB_PASSWORD', ''),
	'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => true,
    'engine' => null,
];