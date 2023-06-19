<?php

use App\Http\Controllers\FilmeAtorController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', [FilmeAtorController::class, 'index']);
    Route::post('/', [FilmeAtorController::class, 'store']);
    Route::delete('/{ator}', [FilmeAtorController::class, 'destroy']);
});