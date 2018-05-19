<?php

use Illuminate\Container\Container;

if (! function_exists('app')) {
	function app($abstract = null)
	{
		if (is_null($abstract)) {
			return Container::getInstance();
		}

		return Container::getInstance()->make($abstract);
	}
}

if (! function_exists('route')) {
	function route()
	{
		return app('router');
	}
}

if (! function_exists('env')) {
	function env($key, $default = null)
	{
		return $_ENV[$key] ? $_ENV[$key] : $default;
	}
}