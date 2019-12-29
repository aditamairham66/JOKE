<?php

namespace aditamairham\Commands;

use Illuminate\Support\ServiceProvider;

class ArtisanJokeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singletron("command.aditamairham.artisan-joke", function ($app)
        {
            return $app['aditamairham\Commands\JokeCommand'];
        });

        $this->commands("command.aditamairham.artisan-joke");
    }
}
