<?php

use App\Http\Controllers\DiretorController;
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
    Route::get('/', [DiretorController::class, 'index']);
    Route::get('/{id}', [DiretorController::class, 'show']);
    Route::post('/', [DiretorController::class, 'store']);
    Route::put('/{id}', [DiretorController::class, 'update']);

    Route::delete('/{id}', [DiretorController::class, 'destroy']);
});
