<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cocur\Slugify\Slugify;

class UtilProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Slugify::class);
        $this->app->singleton(\HTMLPurifier::class);
    }

    public function provides()
    {
        return [
            Slugify::class,
            \HTMLPurifier::class
        ];
    }
}
