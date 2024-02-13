<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trains>
 */
class TrainsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake()->company,
            'stazione_partenza' => fake()->city,
            'stazione_arrivo' => fake()->city,
            'orario_partenza' => fake()->time(),
            'orario_arrivo' => fake()->time(),
            'data_partenza' => fake()->dateTimeBetween('today', '+1 week')->format('Y-m-d'),
            'codice_treno' => fake()->ean13,
            'numero_carrozze' => fake()->numberBetween(1, 10),
            'in_orario' => fake()->boolean,
            'cancellato' => fake()->boolean,
        ];
    }
}
