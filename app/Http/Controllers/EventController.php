<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Gallery;

class EventController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $galleries = Gallery::all();
        return view('event', compact('movies', 'galleries'));
    }
}
