<?php

use App\Http\Controllers\ComunicadoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Rota para comunicados
Route::get('/comunicados', [ComunicadoController::class, 'index']);
