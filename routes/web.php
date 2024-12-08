<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieRatingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RatingController;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/movies/rating', [MovieController::class, 'rating'])->name('movies.rating.index');
    Route::get('/movies/{movie_id}/rating', [RatingController::class, 'show'])->name('movies.rating.show');
    Route::post('/movies/{movie_id}/rate', [RatingController::class, 'store'])->name('movies.rate');
    Route::post('/movies/{movie}/ratings', [RatingController::class, 'store'])->name('ratings.store');
});

Route::get('/event', [EventController::class, 'showMovies'])->name('event');

Route::post('/rate-movie', [MovieRatingController::class, 'store'])->name('movies.rate');

require __DIR__.'/auth.php';
