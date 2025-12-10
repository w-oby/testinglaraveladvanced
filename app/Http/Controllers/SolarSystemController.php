<?php

namespace App\Http\Controllers;

use App\Models\SolarSystem;
use Illuminate\View\View;

class SolarSystemController extends Controller
{

    public function index(): View {

        $solar_systems = SolarSystem::with('planets')->get();

        return view('solar_systems.index', ['solar_systems' => $solar_systems]);

    }   
}
