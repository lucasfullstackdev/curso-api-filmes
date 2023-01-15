<?php

use App\Http\Controllers\FilmeGeneroController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', [FilmeGeneroController::class, 'index']);
    Route::post('/', [FilmeGeneroController::class, 'store']);
    Route::delete('/{ator}', [FilmeGeneroController::class, 'destroy']);
});