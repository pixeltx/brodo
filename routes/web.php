<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieRatingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
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

Route::get('/rating', function () {
    return view('rating');
})->middleware(['auth', 'verified'])->name('rating');

Route::post('/rate-movie', [MovieRatingController::class, 'store']);

require __DIR__.'/auth.php';
