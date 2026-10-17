<?php

namespace Database\Seeders;
use App\Models\Movie;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Movie::create([
        'title' => 'South Park',
        'genre' => 'Comedy',
        'rating' => 9.7,
        'year' => '2008',
        'is_available' => true,
    ]);
    Movie::create([
            'title' => 'Inception',
            'genre' => 'Sci-Fi',
            'rating' => 9,
            'year' => 2010,
            'is_available' => true,
        ]);

        Movie::create([
            'title' => 'The Dark Knight',
            'genre' => 'Action',
            'rating' => 10,
            'year' => 2008,
            'is_available' => true,
        ]);

        Movie::create([
            'title' => 'Parasite',
            'genre' => 'Thriller',
            'rating' => 9,
            'year' => 2019,
            'is_available' => false,
        ]);

        Movie::create([
            'title' => 'Everything Everywhere All at Once',
            'genre' => 'Action',
            'rating' => 8,
            'year' => 2022,
            'is_available' => true,
        ]);
        // at least five records in total
    }
}
