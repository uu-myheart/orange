<?php

namespace App\Http\Controllers;

class IndexController
{
	public function welcome()
	{
		return 'Hello, Welcome to Lara-Fold~';	
	}

	public function create()
	{
		return [
			'name' => 'Garan',
			'age' => 27
		];
	}
}