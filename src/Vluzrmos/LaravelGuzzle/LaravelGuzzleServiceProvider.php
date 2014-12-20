<?php namespace Vluzrmos\LaravelGuzzle;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use GuzzleHttp\Client;


class LaravelGuzzleServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('vluzrmos/laravel-guzzle');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind("guzzle", function(){
			return new Client;
		});

		AliasLoader::getInstance()->alias("Guzzle", 'Vluzrmos\LaravelGuzzle\Guzzle');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
