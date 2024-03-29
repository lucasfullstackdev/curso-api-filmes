<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::prefix('/v1')->group(function () {
    Route::prefix('/generos')->group(realpath(__DIR__ . '/api/v1/generos.php'));
    Route::prefix('/classificacoes')->group(realpath(__DIR__ . '/api/v1/classificacoes.php'));
    Route::prefix('/diretores')->group(realpath(__DIR__ . '/api/v1/diretores.php'));
    Route::prefix('/atores')->group(realpath(__DIR__ . '/api/v1/atores.php'));
    Route::prefix('/filmes')->group(realpath(__DIR__ . '/api/v1/filmes.php'));
    Route::prefix('/filmes/{id}/atores')->group(realpath(__DIR__ . '/api/v1/filmeAtores.php'));
    Route::prefix('/filmes/{id}/generos')->group(realpath(__DIR__ . '/api/v1/filmeGeneros.php'));
    Route::prefix('/filmes/{id}/diretores')->group(realpath(__DIR__ . '/api/v1/filmeDiretores.php'));
});
