<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\SearchController;


// routes/web.php
Route::get('/search', [SearchController::class, 'search'])->name('film.search');
Route::get('/', [FilmController::class, 'movieHome'])->name('home');
Route::get('/movies', [FilmController::class, 'movies'])->name('movies');
Route::get('/movies/{film}', [FilmController::class, 'show'])->name('movies.show');
Route::get('/movies/genre/{genre}', [FilmController::class, 'moviesByGenre'])->name('genre');

// Rute Peran
Route::get('/peran/create', [PeranController::class, 'create'])->name('peran.create');
Route::get('/peran/{filmId}', [PeranController::class, 'index'])->name('peran.index');
Route::post('/peran/store', [PeranController::class, 'store'])->name('peran.store');
Route::get('/peran/{peran}/edit', [PeranController::class, 'edit'])->name('peran.edit');
Route::put('/peran/{peran}', [PeranController::class, 'update'])->name('peran.update');
Route::delete('/peran/{peran}', [PeranController::class, 'destroy'])->name('peran.destroy');


