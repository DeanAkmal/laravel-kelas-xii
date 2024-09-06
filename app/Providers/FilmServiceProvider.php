<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FilmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(FilmRepositoryInterface::class,FilmReposiotry::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
