<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;


Route::get('/', function () {
    return view('welcome');
});

// PLANETS
Route::get('/planets', [PlanetController::class, 'index']);

Route::get('/planets/{name}', [PlanetController::class, 'show']);

// MOVIES
Route::get('/movies', [MovieController::class, 'index']);

Route::get('/movies/{title}', [MovieController::class, 'show']);

Route::get('/movies/genre', [MovieController::class, 'genre']);