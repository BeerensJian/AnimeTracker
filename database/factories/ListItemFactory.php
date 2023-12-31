<?php

namespace Database\Factories;

use App\Enum\AnimeStatus;
use App\Models\ListItem;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ListItem>
 */
class ListItemFactory extends Factory
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
            'title_en' => fake()->streetName(),
            'title_jp' => fake()->streetName(),
            'description' => fake()->text(),
            'status' => AnimeStatus::cases()[rand(0, 4)],
            'rating' => fake()->numberBetween(1, 10),
            'episode' => random_int(1, $totalEpisodes),
            'total_episodes' => $totalEpisodes
        ];
    }
}
