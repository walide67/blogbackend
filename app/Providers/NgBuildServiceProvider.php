<?php

namespace App\Providers;

use App\Services\NgBuildService;
use Illuminate\Support\ServiceProvider;

class NgBuildServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(NgBuildService::class, function ($app) {
            return new NgBuildService();
        });
    }
}
