<?php namespace Vluzrmos\LaravelGuzzle;

use Illuminate\Support\Facades\Facade;

class Guzzle extends Facade{
	
	public static function getFacadeAccessor(){
		return 'guzzle';
	}
}