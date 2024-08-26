<?php

    namespace App\Providers;

    use Illuminate\Support\ServiceProvider;
    use App\Interfaces\PeranRepositoryInterface;
    use App\Repositories\PeranRepository;


    class PeranServiceProvider extends ServiceProvider
    {
        /**
         * Register services.
         */
        public function register(): void
        {
            $this->app->bind(
            PeranRepositoryInterface::class, 
            PeranRepository::class,
        );
        }   

        /**
         * Bootstrap services.
         */
        public function boot(): void
        {
            //
        }
    }
