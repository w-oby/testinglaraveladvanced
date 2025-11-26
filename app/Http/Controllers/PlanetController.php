<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PlanetController extends Controller
{

    public function index(): View
    {

        $planets = DB::table('planets')->get();

        return view('planets.index', ['planets' => $planets]);
    }

    public function show(string $name): View
{

    $planet = DB::table('planets')->where('name', $name)->first();

    return view('planets.show', ['planet' => $planet]);
}

}