<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\VeiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/categorias')->group(function(){
    Route::post('/', [CategoriaController::class, 'store']);
    Route::get('/', [CategoriaController::class, 'index']);
    Route::patch('/{id}', [CategoriaController::class, 'update']);
    Route::get('/{id}', [CategoriaController::class, 'show']);
    Route::delete('/{id}', [CategoriaController::class, 'destroy']);
});

Route::prefix('/veiculos')->group(function(){
    Route::post('/', [VeiculoController::class, 'store']);
    Route::get('/', [VeiculoController::class, 'index']);
    Route::patch('/{id}', [VeiculoController::class, 'update']);
    Route::get('/{id}', [VeiculoController::class, 'show']);
    Route::delete('/{id}', [VeiculoController::class, 'destroy']);
});