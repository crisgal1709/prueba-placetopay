<?php

namespace App\Providers;

use App\PlaceToPay\Client;
use Illuminate\Support\ServiceProvider;

class PlaceToPayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('client', function($app){
            return new Client($app);
        });
    }
}
