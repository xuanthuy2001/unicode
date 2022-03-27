<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {



        Blade::if('env', function ($value) { //@env('local')
            // trả về giá trị boolean
            if (config('app.env') === $value) {
                return true;
            }
            return false;
        });
        Blade::component('package-alert', Alert::class);
    }
}