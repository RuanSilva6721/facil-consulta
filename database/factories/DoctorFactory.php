<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $especialidades = [
            'Cardiologia',
            'Clínico Geral',
            'Dermatologia',
            'Ginecologia',
            'Neurologia',
            'Oftalmologia',
            'Ortopedia',
            'Pediatria',
            'Psiquiatria',
            'Urologia'
        ];

        return [
            'name' => $this->faker->name,
            'specialty' => Arr::random($especialidades),
            'city_id' => function () {
                return \App\Models\City::factory()->create()->id;
            },
        ];
    }
}
