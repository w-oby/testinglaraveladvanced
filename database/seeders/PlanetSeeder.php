<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Planet;

class PlanetSeeder extends Seeder
{

    public function run(): void
    {

        $planets = [
            [
                'name' => 'Mars',
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
                'size_in_km' => 6779,
                'solar_system_id' => 1
            ],
            [
                'name' => 'Venus',
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
                'size_in_km' => 12104,
                'solar_system_id' => 1
            ],
            [
                'name' => 'Earth',
                'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.',
                'size_in_km' => 12742,
                'solar_system_id' => 1

            ],
            [
                'name' => 'Jupiter',
                'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.',
                'size_in_km' => 139820,
                'solar_system_id' => 1
            ],[
                'name' => 'Proxima Centauri b',
                'description' => 'A potentially habitable Earth-sized planet orbiting Proxima Centauri.',
                'size_in_km' => 13000,
                'solar_system_id' => 2
            ],
            [
                'name' => 'Proxima Centauri c',
                'description' => 'A cold super-Earth with an orbit of about 5.2 years.',
                'size_in_km' => 25000,
                'solar_system_id' => 2
            ]   
        ];

        foreach ($planets as $planet) {

            Planet::create([

                'name' => $planet['name'],
                'description' => $planet['description'],
                'size_in_km' => $planet['size_in_km'],
                'solar_system_id' => $planet['solar_system_id']

            ]);
        }
    }
}