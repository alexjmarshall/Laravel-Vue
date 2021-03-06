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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Example of specifying an implementation for an interface

        /* $this->app->bind(
            \App\Repositories\UserRepository::class,
            \App\Repositories\DbUserRepository::class
        ); */
    }
}
