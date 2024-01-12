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
    public function definition()
    {
        return [
            'putnikId' => $this->faker->randomDigitNot(0),
            'destinacijaId' => $this->faker->randomDigitNot(0),
            'datumOd' => $this->faker->date(),
            'datumDo' => $this->faker->date(),
            'avans' => $this->faker->randomNumber(4),
            'smestaj' => $this->faker->sentence(1),
            'status' => $this->faker->sentence(1),
            'brojOsoba' => $this->faker->randomDigitNot(0),
        ];
    }
}
