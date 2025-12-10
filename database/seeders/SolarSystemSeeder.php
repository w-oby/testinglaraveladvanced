<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SolarSystem;

class SolarSystemSeeder extends Seeder
{
    public function run(): void
    {
        $solarSystems = [
            [
                'name' => 'Solar System',
                'star_count' => 1,
                'age_in_years' => 4500000000,
                'description' => 'Our home galaxy system containing the Sun and eight planets.'
            ],
            [
                'name' => 'Alpha Centauri',
                'star_count' => 3,
                'age_in_years' => 6000000000,
                'description' => 'The closest star system to our Solar System.'
            ],
        ];

        foreach ($solarSystems as $system) {
            SolarSystem::create([

                'name' => $system['name'],
                'star_count' => $system['star_count'],
                'age_in_years' => $system['age_in_years'],
                'description' => $system['description']

            ]);
        }
    }
}   