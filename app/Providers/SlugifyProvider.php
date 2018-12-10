<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cocur\Slugify\Slugify;

class SlugifyProvider extends ServiceProvider
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
    }

    public function provides()
    {
        return [Slugify::class];
    }
}
