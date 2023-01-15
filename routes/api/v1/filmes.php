<?php

use App\Http\Controllers\FilmeController;
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
    Route::get('/', [FilmeController::class, 'index']);
    Route::get('/{id}', [FilmeController::class, 'show']);
    Route::post('/', [FilmeController::class, 'store']);
    Route::put('/{id}', [FilmeController::class, 'update']);

    Route::delete('/{id}', [FilmeController::class, 'destroy']);





    
    Route::get('/{id}/diretores', [FilmeController::class, 'diretores']);
    Route::get('/{id}/generos', [FilmeController::class, 'generos']);
    Route::get('/{id}/classificacao', [FilmeController::class, 'classificacao']);
});