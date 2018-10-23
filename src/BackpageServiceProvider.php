<?php

namespace Semdevops\Backpage;

use Illuminate\Support\ServiceProvider;

class BackpageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->make('Semdevops\Backpage\Controllers\BackpageController');
        $this->loadRoutesFrom(__DIR__. '/routes/route.php');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
