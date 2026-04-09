<?php

use App\Http\Controllers\ComunicadoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommercialDocumentController;
use App\Http\Controllers\CommercialMapController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\IntegracaoController;

// Grupo com prefixo 'commercial' e middleware auth
Route::prefix('commercial')->middleware('auth')->group(function () {
    // Documentos
    Route::resource('documents', CommercialDocumentController::class)->names('commercial.documents');

    // Mapa
    Route::get('map', [CommercialMapController::class, 'index'])->name('commercial.map');
});

// Rota principal - redireciona baseado na autenticação
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }
    return redirect()->route('login');
});

// Rotas públicas (não autenticadas)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rotas protegidas por autenticação
Route::middleware(['auth'])->group(function () {

    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');

    // Home após login - USANDO O WELCOME CONTROLLER
    Route::get('/home', [WelcomeController::class, 'index'])->name('home');

    // Rotas de comunicados
    Route::resource('comunicados', ComunicadoController::class);

    // ========== INTEGRAÇÕES (CONTROLE DE ACESSO) ==========
    // Rotas para o módulo de integrações
    Route::prefix('integracoes')->name('integracoes.')->group(function () {
        Route::get('/', [IntegracaoController::class, 'index'])->name('index');
        Route::get('/matriz', [IntegracaoController::class, 'matriz'])->name('matriz');
        Route::get('/create', [IntegracaoController::class, 'create'])->name('create');
        Route::post('/', [IntegracaoController::class, 'store'])->name('store');
        Route::get('/{equipamento}/edit', [IntegracaoController::class, 'edit'])->name('edit');
        Route::put('/{equipamento}', [IntegracaoController::class, 'update'])->name('update');
        Route::delete('/{equipamento}', [IntegracaoController::class, 'destroy'])->name('destroy');
        Route::put('/celula/{sistema}/{equipamento}', [IntegracaoController::class, 'updateCelula'])->name('celula.update');
        Route::get('/export', [IntegracaoController::class, 'export'])->name('export');
    });
    // ========== FIM INTEGRAÇÕES ==========

    // Rotas dos setores
    Route::get('/comercial', function () {
        $documents = \App\Models\CommercialDocument::with('creator')->orderBy('category')->get();
        $areas = \App\Models\CommercialMapArea::all();
        
        return view('pages.comercial', compact('documents', 'areas'));
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