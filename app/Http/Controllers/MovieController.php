<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // index - all movies ordered by rating
    public function index(): View {

        return view('movies.index');

    }

    public function allMoviesOrderedByRating(): View {

        $allMovies = DB::table('movies')->orderBy('rating', 'desc')->get();

        return view('movies.all_movies', ['allMovies' => $allMovies]);

    }

    public function show(string $title): View {

        $singleMovie = DB::table('movies')->where('title', $title)->first();

        return view('movies.show', ['movie' => $singleMovie]);

    }

    public function showByGenre(): View {

        $singleMovieByGenre = DB::table('movies')->orderby('genre')->get();

        return view('movies.genre', ['showByGenre' => $singleMovieByGenre]);

    }
}
