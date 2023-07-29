<?php

namespace Database\Seeders;

use App\Models\DoctorPatient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorPatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfRecords = 20;

        DoctorPatient::factory($numberOfRecords)->create();
    }
}
