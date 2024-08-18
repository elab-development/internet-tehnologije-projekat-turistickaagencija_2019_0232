<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Putnik>
 */
class PutnikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Ime' => $this->faker->name,
            'Prezime' => $this->faker->lastName,
            'Godine' => $this->faker->numerify('##'),
            'Interesovanja' => $this->faker->word
        ];
    }
}
