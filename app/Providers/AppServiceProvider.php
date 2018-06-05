<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layout.navi', function ($view){
            $view->with('archives', \App\Posts::archives());
        });

        view()->composer('layout.tags', function ($view){
            $view->with('tags', \App\Tags::has('posts')->pluck('name'));
        });





    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
