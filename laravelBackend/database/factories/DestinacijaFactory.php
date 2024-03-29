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
    public function definition(): array
    {
        return [
            'Naziv' => $this->faker->word,
            'GeoSirina' => $this->faker->numerify('##'),
            'GeoDuzina' => $this->faker->numerify('##'),
            'Opis' => $this->faker->word,
            'Klima' => $this->faker->word,
            'Atrakcije' => $this->faker->word,
        ];
    }
}
