<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\View\View;

class PlanetController extends Controller
{

    public function index(): View
    {

        // Eager loading
        $planets = Planet::with('solarSystem')->get();

        // Lazy loading
        // $planets = Planet::all();

        return view('planets.index', ['planets' => $planets]);

    }

    public function show(string $name): View
    {

        $planet = Planet::with('solarSystem')->where('name', $name)->firstOrFail();

        return view('planets.show', ['planet' => $planet]);

    }

}