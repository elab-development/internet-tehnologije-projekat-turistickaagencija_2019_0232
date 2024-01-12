<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destinacija>
 */
class DestinacijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Naziv' => $this->faker->word,
            'GeoSirina' => $this->faker->randomNumber(2),
            'GeoDuzina' => $this->faker->randomNumber(2),
            'Opis' => $this->faker->word,
            'Klima' => $this->faker->word,
            'Atrakcije' => $this->faker->word,
        ];
    }
}
