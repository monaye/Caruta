<?php 

namespace Monaye\Larasort\Facades;

use Illuminate\Support\Facades\Facade;

class Larasort extends Facade 
{

	protected static function getFacadeAccessor() 
	{
		return 'larasort';
	}

}