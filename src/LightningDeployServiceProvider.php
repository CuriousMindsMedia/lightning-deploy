<?php

namespace CuriousMinds\LightningDeploy;

use Illuminate\Support\ServiceProvider;

class LightningDeployServiceProvider extends ServiceProvider {
    /**
     *
     */
    public function boot(): void
    {
        $path = __DIR__.'/../config/config.php';

        $this->publishes([$path => config_path('lightning.php')]);
        $this->mergeConfigFrom($path, 'lightning');
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
    }

    /**
     *
     */
    public function register()
    {

    }
}