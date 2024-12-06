<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class MovieRatingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'rating' => 'required|integer|min:1|max:5',
            //'user_id' => 'required|exists:users,id', // Validate user_id
        ]);

        $rating = new Rating();
        $rating->movie_id = $request->movie_id;
        $rating->rating = $request->rating;
        //$rating->user_id = $request->user_id; // Assign user_id
        $rating->save();

        return response()->json(['message' => 'Rating saved successfully!']);
    }
}
