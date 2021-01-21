<?php

namespace Bfg\UI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as ServiceProviderIlluminate;

/**
 * Class ServiceProvider
 * @package Bfg\UI
 */
class ServiceProvider extends ServiceProviderIlluminate
{
    /**
     * @var array
     */
    protected $commands = [

    ];

    /**
     * The application's route middleware.
     * @var array
     */
    protected $routeMiddleware = [

    ];

    /**
     * Bootstrap services.
     *
     * @return void
     * @throws \Exception
     */
    public function boot()
    {
        Blade::componentNamespace('Bfg\\UI\\Components', 'ui');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRouteMiddleware();

        $this->commands($this->commands);

        /**
         * Register publisher admin assets
         */
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/ui'),
        ], 'ui-assets');
    }

    /**
     * Register the route middleware.
     *
     * @return void
     */
    protected function registerRouteMiddleware()
    {
        // register route middleware.
        foreach ($this->routeMiddleware as $key => $middleware) {

            app('router')->aliasMiddleware($key, $middleware);
        }
    }
}

