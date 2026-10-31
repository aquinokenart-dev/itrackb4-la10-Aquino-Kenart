<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        $comedy   = Genre::create(['name' => 'Comedy']);
        $scifi    = Genre::create(['name' => 'Sci-Fi']);
        $action   = Genre::create(['name' => 'Action']);
        $thriller = Genre::create(['name' => 'Thriller']);

        Movie::create([
            'title' => 'South Park',
            'genre_id' => $comedy->id,
            'rating' => 9.7,
            'year' => 2008,
            'is_available' => true,
        ]);

        Movie::create([
            'title' => 'Inception',
            'genre_id' => $scifi->id,
            'rating' => 9,
            'year' => 2010,
            'is_available' => true,
        ]);

        Movie::create([
            'title' => 'The Dark Knight',
            'genre_id' => $action->id,
            'rating' => 10,
            'year' => 2008,
            'is_available' => true,
        ]);

        Movie::create([
            'title' => 'Parasite',
            'genre_id' => $thriller->id,
            'rating' => 9,
            'year' => 2019,
            'is_available' => false,
        ]);

        Movie::create([
            'title' => 'Everything Everywhere All at Once',
            'genre_id' => $action->id,
            'rating' => 8,
            'year' => 2022,
            'is_available' => true,
        ]);
    }
}