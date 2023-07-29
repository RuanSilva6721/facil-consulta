<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'doctor_id' => function () {
                return \App\Models\Doctor::factory()->create()->id;
            },
            'patient_id' => function () {
                return \App\Models\Patient::factory()->create()->id;
            },
        ];
    }
}
