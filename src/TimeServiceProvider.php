<?php

namespace Aminsaki\time;

use Illuminate\Support\ServiceProvider;
use Aminsaki\time\middlewares\CheckTime;

class TimeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
        if(! $this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }

        $this->loadViewsFrom(__DIR__.'/Views', 'Myviews');

         $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/Myviews'),
        ],'time');

         #middlewares

         $router=$this->app{'router'};
         $router->middleware('checkTime',CheckTime::class);

         #migration 
        ///$this->loadMigrationsFrom(__DIR__.'/Migrations');

         $this->publishes([
            __DIR__.'/Migrations' => database_path('migrations'),
        ]);

        #facad
        $this->app->bind('MyTime',function (){

            return new Facade\Timer();
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->mergeConfigFrom(__DIR__.'/Config/config.php', 'Myconfig' );
    }
}
