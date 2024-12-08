<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class EventController extends Controller
{
    public function index()
    {
        return view('event'); 
    }

    public function showMovies()
    {
        $movies = Movie::all();
        return view('event', compact('movies'));
    }
}
