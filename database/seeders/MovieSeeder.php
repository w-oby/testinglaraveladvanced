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
                'description' => 'A five-year-old Indian boy is adopted by an Australian couple after getting lost hundreds of kilometers from home. 25 years later, he sets out to find his lost family.'
            ],
            [
                'title' => 'Manchester by the Sea',
                'genre' => 'Drama',
                'release_year' => '2016',
                'rating' => '7.8',
                'description' => 'A depressed uncle is asked to take care of his teenage nephew after the boys father dies.'
            ],
            [
                'title' => 'The Iron Giant',
                'genre' => 'Family Animation',
                'release_year' => '1999',
                'rating' => '8.1',
                'description' => 'A young boy befriends a giant robot from outer space that a paranoid government agent wants to destroy.'
            ],
            [
                'title' => 'In Bruges',
                'genre' => 'Comedy',
                'release_year' => '2008',
                'rating' => '7.9',
                'description' => 'After a job gone wrong, hitman Ray and his partner await orders from their ruthless boss in Bruges, Belgium, the last place in the world Ray wants to be.'
            ],
            [
                'title' => 'The Captain',
                'genre' => 'War',
                'release_year' => '2017',
                'rating' => '7.3',
                'description' => 'In the last moments of World War II, a young German airman fighting for survival finds a Luftwaffe captains uniform. Impersonating an officer, the man quickly takes on the monstrous identity of the perpetrators he is escaping from.'
            ],
            [
                'title' => 'All Quiet on the Western Front',
                'genre' => 'War',
                'release_year' => '2022',
                'rating' => '7.8',
                'description' => 'A young German soldiers eagerness to serve his country quickly fades when he witnesses the horrors of combat on the Western Front during World War I.'
            ],
            [
                'title' => 'Wolfs',
                'genre' => 'Comedy',
                'release_year' => '2024',
                'rating' => '6.5',
                'description' => 'Two rival fixers cross paths when they are both called in to help cover up a prominent New York officials misstep. Over one explosive night, they will have to set aside their petty grievances and their egos to finish the job.'
            ],
            [
                'title' => 'The Godfather',
                'genre' => 'Crime',
                'release_year' => '1972',
                'rating' => '9.2',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.'
            ],
            [
                'title' => 'Only the Brave',
                'genre' => 'Biography',
                'release_year' => '2017',
                'rating' => '7.6',
                'description' => 'Based on the true story of the Granite Mountain Hotshots, a group of elite firefighters who risk everything to protect a town from a historic wildfire.'
            ],
            [
                'title' => '12 Angry Men',
                'genre' => 'Drama',
                'release_year' => '1997',
                'rating' => '7.8',
                'description' => 'Twelve men must decide the fate of one when one juror objects to the jurys decision.'
            ]
        ];

        foreach ($movies as $movie) {

            DB::table('movies')->insert([
                'title' => $movie['title'],
                'genre' => $movie['genre'],
                'release_year' => $movie['release_year'],
                'description' => $movie['description'],
                'rating' => $movie['rating']

            ]);

        }

    }
}
