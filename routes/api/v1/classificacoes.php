<?php

use App\Http\Controllers\ClassificacaoController;
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
    Route::get('/', [ClassificacaoController::class, 'index']);
    Route::get('/{id}', [ClassificacaoController::class, 'show']);
    Route::post('/', [ClassificacaoController::class, 'store']);
    Route::put('/{id}', [ClassificacaoController::class, 'update']);

    Route::delete('/{id}', [ClassificacaoController::class, 'destroy']);
});
