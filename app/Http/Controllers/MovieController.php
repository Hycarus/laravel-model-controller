<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movieList = Movie::all();
        return view('pages.movies.index', compact('movieList'));
    }
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('pages.movies.show', compact('movie'));
    }
}
