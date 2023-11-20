<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $genres = ['Action', 'Adventure', 'Comedy', 'Drama', 'Slice of Life', 'Fantasy', 'Magic', 'Supernatural', 'Horror', 'Mystery', 'Psychological', 'Romance', 'Sci-Fi'];

        foreach ($genres as $genre) {
            Genre::create(['name' => $genre]);
        }



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
