<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rezervacija>
 */
class RezervacijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'putnik_id' => $this->faker->randomDigitNot(0),
            'destinacija_id' => $this->faker->randomDigitNot(0),
            'datumOd' => $this->faker->dateTimeThisYear(),
            'datumDo' => $this->faker->dateTimeThisYear(),
            'avans' => $this->faker->numerify('####'),
            'smestaj' => $this->faker->sentence($nbWords = 1, $variableNbWords = true),
            'status' => $this->faker->sentence($nbWords = 1),
            'brojOsoba' => $this->faker->numerify('#')
        ];
    }
}
