<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'synopsis' => $this->faker->text(),
            'cover' => $this->faker->imageUrl(),
            'duration' => $this->faker->numberBetween(60, 180),
            'release_date' => $this->faker->date(),

        ];
    }
}
