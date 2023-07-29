<?php

namespace App\Providers;

use App\Repositories\DoctorRepository;
use App\Repositories\Eloquent\DoctorRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class DoctorRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(DoctorRepository::class, DoctorRepositoryEloquent::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
