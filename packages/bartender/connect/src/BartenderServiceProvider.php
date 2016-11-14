<?php

namespace Bartender\Connect;

use Illuminate\Support\ServiceProvider;

class BartenderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'../routes/web.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Bartender\Connect\BartenderController');
    }
}
