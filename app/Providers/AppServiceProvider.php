<?php

namespace App\Providers;

use App\Models\City;
use App\Models\Country;
use Flat3\Lodata\Facades\Lodata;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!App::runningInConsole()) {
            Lodata::discover(City::class);
            Lodata::discover(Country::class);
        }
    }
}
