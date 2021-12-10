<?php

namespace App\Providers;

use App\Models\CovidCase;
use App\Observers\CovidCaseObserver;
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
        CovidCase::observe(CovidCaseObserver::class);
    }
}
