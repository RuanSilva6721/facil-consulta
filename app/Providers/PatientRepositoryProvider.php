<?php

namespace App\Providers;

use App\Repositories\Eloquent\PatientRepositoryEloquent;
use App\Repositories\PatientRepository;
use Illuminate\Support\ServiceProvider;

class PatientRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PatientRepository::class, PatientRepositoryEloquent::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
