<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::prefix('/categorias')->group(function(){
    Route::post('/', [CategoriaController::class, 'store']);
    Route::get('/', [CategoriaController::class, 'index']);
    Route::patch('/{id}', [CategoriaController::class, 'update']);
    Route::get('/{id}', [CategoriaController::class, 'show']);
    Route::delete('/{id}', [CategoriaController::class, 'destroy']);
});