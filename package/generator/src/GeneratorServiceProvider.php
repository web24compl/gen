<?php

namespace Gabenn\Generator;

use Illuminate\Support\ServiceProvider;

class GeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','generator');
        $this->loadMigrationsFrom(__DIR__,'/database/migrations');
    }

    public function register()
    {
      
    }
}