<?php

use App\Http\Controllers\Api\PeranController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FilmController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/perans', PeranController::class);
Route::apiResource('/films', FilmController::class);
