<?php

namespace Larapanel\Larapanel;

use Illuminate\Support\ServiceProvider;
use Larapanel\Larapanel\View\Components\AclMenu;

class LarapanelServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
     public function boot()
     {
         $this->loadRoutesFrom(__DIR__ . '/routes/panel/web.php');
         $this->loadRoutesFrom(__DIR__ . '/routes/acl/web.php');
         $this->loadViewsFrom(__DIR__ . '/views','larapanel');
         $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
         $this->mergeConfigFrom(__DIR__ . '/config/larapanel.php', 'larapanel');
         $this->publishes([
             __DIR__.'/config/larapanel.php' =>config_path('larapanel.php'),
             __DIR__.'/views/' => resource_path('views/vendor/larapanel'),
             __DIR__.'/assets/' => resource_path('js/vendor/larapanel')
         ], 'larapanel');
         $this->loadViewComponentsAs('', [
             AclMenu::class
         ]);
     }
}
