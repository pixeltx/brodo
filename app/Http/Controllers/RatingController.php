<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Rating;

class RatingController extends Controller
{
    public function show($movie_id)
    {
        $movie = Movie::findOrFail($movie_id);
        return view('movies.rating-detail', compact('movie'));
    }

    public function store(Request $request, $movie_id)
    {
        try {
            $request->validate([
                'rating' => 'required|integer|min:1|max:5',
            ]);

            $rating = new Rating();
            $rating->movie_id = $movie_id;
            $rating->user_id = auth()->id(); // Assuming you have user authentication
            $rating->rating = $request->input('rating');
            $rating->save();

            if ($request->ajax()) {
                return response()->json(['success' => true, 'message' => 'Rating submitted successfully!']);
            }

            return redirect()->route('movies.show', ['movie' => $movie_id])->with('success', 'Rating submitted successfully!');
        } catch (\Exception $e) {
            \Log::error('Error submitting rating: ' . $e->getMessage());
            if ($request->ajax()) {
                return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
            }

            return redirect()->route('movies.show', ['movie' => $movie_id])->with('error', 'Failed to submit rating!');
        }
    }
}
