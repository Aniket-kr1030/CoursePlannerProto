<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\students>
 */
class studentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'name' => $this->faker->name(),
           'vtu'  => $this->faker->unique()->word(),
           'degree' => 'Btech',
           'specialisation' => $this->faker->word(),
           'semester'=>rand(1,8),
        ];
    }
}
