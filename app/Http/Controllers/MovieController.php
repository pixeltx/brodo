<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
        // return view('movies.index');
    }
    public function rating()
    {
        $movies = Movie::all();
        return view('movies.rating', compact('movies'));
    }
}
