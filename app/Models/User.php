<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	public $fillable = ['username'];

	public $timestamps = true;
}