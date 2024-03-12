<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'company' => fake()->randomElement(['Trenitalia', 'Italo', 'Trenord']),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'cp' => fake()->randomNumber(5, true),
            'number_of_carriages' => rand(2, 11),
            'is_intime' => rand(0, 1),
            'deleted' => rand(0, 1),
        ];
    }
}
