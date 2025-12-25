<?php

namespace App\Http\Controllers;

use App\Models\SolarSystem;
use Illuminate\View\View;

class SolarSystemController extends Controller
{

    // public function index(): View {

    //     $solar_systems = SolarSystem::with('planets')->get();

    //     return view('solar_systems.index', ['solar_systems' => $solar_systems]);

    // }

    public function index(): View {

        $solar_systems = SolarSystem::all();

        return view('solar_systems.index', ['solar_systems' => $solar_systems]);

    }

    public function show($id): View {

        $solar_system = SolarSystem::with('planets')->findOrFail($id);

        return view('solar_systems.show', ['solar_system' => $solar_system]);

    }
}
