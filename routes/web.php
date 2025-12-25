<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\SolarSystemController;

Route::get('/', function () {
    return view('welcome');
});

// PLANETS
Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');

Route::get('/planets/{name}', [PlanetController::class, 'show'])->name('planets.show');

// MOVIES
Route::get('/movies', [MovieController::class, 'index']);

Route::get('/movies/rating', [MovieController::class, 'allMoviesOrderedByRating']);

Route::get('/movies/show/{title}', [MovieController::class, 'show']);

Route::get('/movies/genre', [MovieController::class, 'showByGenre']);

// SOLARSYSTEMS
Route::get('/solarsystems', [SolarSystemController::class, 'index'])->name('solarsystems.index');

Route::get('/solarsystems/{id}', [SolarSystemController::class, 'show'])->name('solarsystems.show');