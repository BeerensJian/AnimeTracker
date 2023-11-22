<?php

namespace Database\Factories;

use App\Models\ListItem;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ListItem>
 */
class AnimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition(): array
    {
        $totalEpisodes = fake()->numberBetween(1, 24);

        return [
            'title' => fake()->title(),
            'description' => fake()->text(),
            'rating' => fake()->numberBetween(1, 10),
            'episode' => random_int(1, $totalEpisodes),
            'total_episodes' => $totalEpisodes
        ];
    }
}
