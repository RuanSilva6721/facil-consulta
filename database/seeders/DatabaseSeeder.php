<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\CitySeeder;
use Database\Seeders\DoctorPatientSeeder;
use Database\Seeders\DoctorSeeder;
use Database\Seeders\PatientSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(CitySeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(DoctorPatientSeeder::class);

        \App\Models\User::factory(1)->create();

    }
}
