<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DoctorPatient>
 */
class DoctorPatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $doctorsIds = \App\Models\Doctor::pluck('id')->toArray();
        $patientIds = \App\Models\Patient::pluck('id')->toArray();

        return [
            'doctor_id' => Arr::random($doctorsIds),
            'patient_id' => Arr::random($patientIds),
        ];
    }
}
