<?php

namespace App\Providers;

use Barryvdh\Debugbar\ServiceProvider as Debugbar;
use Illuminate\Support\ServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(env('APP_ENV')==='local'){
            $this->app->register(IdeHelperServiceProvider::class);
            $this->app->register(Debugbar::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
