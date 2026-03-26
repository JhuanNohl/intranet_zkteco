<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

// Rotas públicas (não autenticadas)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rotas protegidas (requerem autenticação)
Route::middleware(['auth'])->group(function () {

    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');

    // Home após login
    Route::get('/home', function () {
        return view('welcome');
    })->name('home');

    // Rota principal redireciona para home
    Route::get('/', function () {
        return redirect()->route('welcome');
    });

    // Rotas dos setores
    Route::get('/comercial', function () {
        return view('pages.comercial');
    })->name('comercial');

    Route::get('/departamento-pessoal', function () {
        return view('pages.departamento-pessoal');
    })->name('departamento-pessoal');

    Route::get('/financeiro', function () {
        return view('pages.financeiro');
    })->name('financeiro');

    Route::get('/importacao', function () {
        return view('pages.importacao');
    })->name('importacao');

    Route::get('/desenvolvimento', function () {
        return view('pages.desenvolvimento');
    })->name('desenvolvimento');

    Route::get('/suporte', function () {
        return view('pages.suporte');
    })->name('suporte');

    Route::get('/ti', function () {
        return view('pages.ti');
    })->name('ti');

    Route::get('/treinamentos', function () {
        return view('pages.treinamentos');
    })->name('treinamentos');

    Route::get('/expedicao', function () {
        return view('pages.expedicao');
    })->name('expedicao');

    Route::get('/fabrica', function () {
        return view('pages.fabrica');
    })->name('fabrica');

    Route::get('/manutencao', function () {
        return view('pages.manutencao');
    })->name('manutencao');

    Route::get('/produtos', function () {
        return view('pages.produtos');
    })->name('produtos');
});

// Se você ainda tem o arquivo auth.php, mantenha ou remova a linha abaixo
// require __DIR__ . '/auth.php';