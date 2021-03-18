<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CalculateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Calculate', 'App\Services\Calculate');
    }
}
