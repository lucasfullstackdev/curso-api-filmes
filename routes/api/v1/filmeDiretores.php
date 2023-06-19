<?php

use App\Http\Controllers\FilmeDiretorController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', [FilmeDiretorController::class, 'index']);
    Route::post('/', [FilmeDiretorController::class, 'store']);
    Route::delete('/{diretor}', [FilmeDiretorController::class, 'destroy']);
});