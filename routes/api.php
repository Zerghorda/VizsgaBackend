<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();

    Route::get('temas/show', [TemaController::class, 'show']);
    Route::get('tema/{$id}', [TemaController::class, 'index']);
    Route::post('tema/store', [TemaController::class, 'store']);
    Route::update('tema/{$id}', [TemaController::class, 'update']);
    Route::delete('tema/{$id}', [TemaController::class, 'show']);

    Route::get('szavaks/show', [SzavakController::class, 'show']);
    Route::get('szavak/{$id}', [SzavakController::class, 'index']);
    Route::post('szavak/store', [SzavakController::class, 'store']);
    Route::update('szavak/{$id}', [SzavakController::class, 'update']);
    Route::delete('szavak/{$id}', [SzavakController::class, 'show']);
})->middleware('auth:sanctum');
