<?php namespace Mnshankar\Csv;

use Illuminate\Support\ServiceProvider;

class CsvServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->package('mnshankar/csv');
		$this->app['csv'] = $this->app->share(function(){
            return new CSV();
		});
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