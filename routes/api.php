<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunicadoController;

// Rotas da API
Route::get('/comunicados', [ComunicadoController::class, 'index']);
Route::get('/comunicados/{id}', [ComunicadoController::class, 'show']);
Route::post('/comunicados', [ComunicadoController::class, 'store']);
Route::put('/comunicados/{id}', [ComunicadoController::class, 'update']);
Route::delete('/comunicados/{id}', [ComunicadoController::class, 'destroy']);
