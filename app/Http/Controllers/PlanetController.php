<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use App\Models\Planet;
use Illuminate\View\View;

class PlanetController extends Controller
{

    public function index(): View
    {

        // $planets = DB::table('planets')->get();
        $planets = Planet::all();

        return view('planets.index', ['planets' => $planets]);

    }

    public function show(string $name): View
    {

        // $planet = DB::table('planets')->where('name', $name)->first();
        $planet = Planet::where('name', $name)->firstOrFail();

        return view('planets.show', ['planet' => $planet]);

    }

}