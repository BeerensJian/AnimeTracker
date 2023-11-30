<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ListItem;
use App\Models\Genre;
use App\Services\JikanAPIService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $genres = (new JikanAPIService())->genres();
        foreach ($genres['data'] as $genre) {
            Genre::create(['name' => $genre['name']]);
        }

        $anime = ListItem::factory()->create();
        $anime2 = ListItem::factory()->create();

        $genres = Genre::all();
        $anime->genres()->attach($genres->random(2));
        $anime->genres()->attach($genres->random(3));
    }
}
