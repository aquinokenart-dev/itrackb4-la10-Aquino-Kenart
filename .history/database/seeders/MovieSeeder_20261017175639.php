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
        'title' => 'Tag',
        'genre' => 'Comedy',
    ]);
    // at least five records in total
    }
}
