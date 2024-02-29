<?php

namespace BuiltByBuilder\EasyNavPlus;

use Illuminate\Support\ServiceProvider;

class EasyNavPlusServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([
        __DIR__.'/../../config/easynavplus.php' => config_path('easynavplus.php'),
      ], 'easynavplus');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
			$this->mergeConfigFrom(
        __DIR__.'/../../config/easynavplus.php', 'easynavplus'
	    );
      $this->app->bind('easynavplus', function($app)
      {
        return $this->app->make('BuiltByBuilder\EasyNavPlus\EasyNavPlus');
      });
    }
}
