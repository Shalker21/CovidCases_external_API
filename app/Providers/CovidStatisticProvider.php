<?php

namespace App\Providers;

use App\Services\CovidStatistic\Client;
use Illuminate\Support\ServiceProvider;

class CovidStatisticProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Client::class, function ($app) {
           
            return new Client(config('services.covidStatistic.uri'));
        
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
