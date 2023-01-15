<?php

use App\Http\Controllers\AtorController;
use Illuminate\Support\Facades\Route;

/**
 *  - Listar todos
 *  - Listar registro específico
 *  - Cadastra registro
 *  - Atualizar registro
 *  - Deletar registro
 *  - Listar quais filmes possuem relacionamento com a entidade
 */

Route::prefix('/')->group(function () {
    Route::get('/', [AtorController::class, 'index']);
    Route::get('/{id}', [AtorController::class, 'show']);
    Route::post('/', [AtorController::class, 'store']);
    Route::put('/{id}', [AtorController::class, 'update']);

    Route::delete('/{id}', [AtorController::class, 'destroy']);
});