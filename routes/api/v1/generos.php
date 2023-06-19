<?php

use App\Http\Controllers\GenerosController;
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
    Route::get('/', [GenerosController::class, 'index']);
    Route::get('/{id}', [GenerosController::class, 'show']);
    Route::post('/', [GenerosController::class, 'store']);
    Route::put('/{id}', [GenerosController::class, 'update']);

    Route::delete('/{id}', [GenerosController::class, 'destroy']);
});