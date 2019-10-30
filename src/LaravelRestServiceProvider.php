<?php

namespace Lujo\Laravel\Rest;

use Illuminate\Support\ServiceProvider;

class LaravelRestServiceProvider extends ServiceProvider {
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
    public function boot() {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('Lujo\Laravel\Rest\RestRoute', function () {
            return new RestRoute();
        });
    }
}