<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\{
    FilmController,
};

Route::get('/', [FilmController::class, 'movieHome'])->name('home');
Route::get('/movies', [FilmController::class, 'movies'])->name('movies');
Route::get('/movies/{film}', [FilmController::class, 'show'])->name('movies.show');
Route::get('/movies/genre/{genre}', [FilmController::class, 'moviesByGenre'])->name('genre');
Route::get('/movies/{film}', [FilmController::class, 'show'])->name('movies.show');
Route::get('perans/index', [PeranController::class, 'index'])->name('perans.index');

