<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();

    Route::get('temas/show', [TemaController::class, 'show']);
    Route::get('temas/{$id}', [TemaController::class, 'index']);
    Route::post('temas/store', [TemaController::class, 'store']);
    Route::update('temas/{$id}', [TemaController::class, 'update']);
    Route::delete('tema/{$id}', [TemaController::class, 'show']);

    Route::get('szavaks/show', [SzavakController::class, 'show']);
    Route::get('szavaks/{$id}', [SzavakController::class, 'index']);
    Route::post('szavaks/store', [SzavakController::class, 'store']);
    Route::update('szavaks/{$id}', [SzavakController::class, 'update']);
    Route::delete('szavaks/{$id}', [SzavakController::class, 'show']);
})->middleware('auth:sanctum');
