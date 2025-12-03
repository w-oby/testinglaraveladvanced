<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $movies = [
            [
                'title' => 'Lion',
                'genre' => 'Drama',
                'release_year' => '2016',
                'rating' => '8',
                'description' => 'blabla'
            ],
            [
                'title' => 'Manchester by the Sea',
                'genre' => 'Drama',
                'release_year' => '2016',
                'rating' => '7.8',
                'description' => 'blabla'
            ],
            [
                'title' => 'The Iron Giant',
                'genre' => 'Family Animation',
                'release_year' => '1999',
                'rating' => '8.1',
                'description' => 'blabla'
            ],
            [
                'title' => 'In Bruges',
                'genre' => 'Comedy',
                'release_year' => '2008',
                'rating' => '7.9',
                'description' => 'blabla'

            ],
            [
                'title' => 'The Captain',
                'genre' => 'War',
                'release_year' => '2017',
                'rating' => '7.3',
                'description' => 'blabla'
            ],
            [
                'title' => 'All Quiet on the Western Front',
                'genre' => 'War',
                'release_year' => '2022',
                'rating' => '7.8',
                'description' => 'blabla'
            ],
            [
                'title' => 'Wolfs',
                'genre' => 'Comedy',
                'release_year' => '2024',
                'rating' => '6.5',
                'description' => 'blabla'
            ],
            [
                'title' => 'The Godfather',
                'genre' => 'Crime',
                'release_year' => '1972',
                'rating' => '9.2',
                'description' => 'blabla'
            ],
            [
                'title' => 'Only the Brave',
                'genre' => 'Biography',
                'release_year' => '2017',
                'rating' => '7.6',
                'description' => 'blabla'
            ],
            [
                'title' => '12 Angry Men',
                'genre' => 'Drama',
                'release_year' => '1997',
                'rating' => '7.8',
                'description' => 'blabla'
            ]
        ];

        foreach ($movies as $movie) {

            DB::table('movies')->insert([
                'title' => $movie['title'],
                'genre' => $movie['genre'],
                'release_year' => $movie['release_year'],
                'rating' => $movie['rating']
            ]);

        }

    }
}
