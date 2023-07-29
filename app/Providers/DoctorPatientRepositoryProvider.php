<?php

namespace App\Providers;

use App\Repositories\DoctorPatientRepository;
use App\Repositories\Eloquent\DoctorPatientRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class DoctorPatientRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(DoctorPatientRepository::class, DoctorPatientRepositoryEloquent::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
