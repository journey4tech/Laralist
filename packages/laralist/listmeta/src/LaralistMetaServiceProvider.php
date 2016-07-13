<?php namespace Laralist\Listmeta;

use Illuminate\Support\ServiceProvider;

class LaralistMetaServiceProvider extends ServiceProvider
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
       
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('meta', function () {
            return new Meta;
        });
    }
}
