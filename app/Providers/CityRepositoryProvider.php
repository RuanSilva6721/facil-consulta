<?php

namespace App\Providers;

use App\Repositories\CityRepository;
use App\Repositories\Eloquent\CityRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class CityRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CityRepository::class, CityRepositoryEloquent::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
