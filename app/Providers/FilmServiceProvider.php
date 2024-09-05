<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\filmRepositoryInterfaces;
use App\Repositories\filmRepository;

class FilmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(filmRepositoryInterfaces::class,filmRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
