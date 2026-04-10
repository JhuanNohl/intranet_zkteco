<?php

use App\Http\Controllers\ComunicadoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommercialDocumentController;
use App\Http\Controllers\CommercialMapController;
use App\Http\Controllers\IntegracaoController;
use App\Http\Controllers\ManutencaoEquipamentoController;

// Grupo com prefixo 'commercial' e middleware auth
Route::prefix('commercial')->middleware('auth')->group(function () {
    Route::resource('documents', CommercialDocumentController::class)->names('commercial.documents');
    Route::get('map', [CommercialMapController::class, 'index'])->name('commercial.map');
});

// Rota principal
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }
    return redirect()->route('login');
});

// Rotas públicas
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rotas protegidas
Route::middleware(['auth'])->group(function () {

    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');

    Route::get('/home', [WelcomeController::class, 'index'])->name('home');
    Route::resource('comunicados', ComunicadoController::class);

    // ========== ROTAS DE MANUTENÇÃO ==========
    Route::prefix('manutencao')->name('manutencao.')->group(function () {
        // Página principal (rota nomeada como 'index')
        Route::get('/', [ManutencaoEquipamentoController::class, 'index'])->name('index');
        
        // API para AJAX
        Route::get('/equipamentos/stats', [ManutencaoEquipamentoController::class, 'getStats'])->name('equipamentos.stats');
        Route::get('/equipamentos/table', [ManutencaoEquipamentoController::class, 'getTableData'])->name('equipamentos.table');
        
        // CRUD via AJAX
        Route::post('/equipamentos', [ManutencaoEquipamentoController::class, 'store'])->name('equipamentos.store');
        Route::put('/equipamentos/{id}', [ManutencaoEquipamentoController::class, 'update'])->name('equipamentos.update');
        Route::delete('/equipamentos/{id}', [ManutencaoEquipamentoController::class, 'destroy'])->name('equipamentos.destroy');
        
        // Ações especiais
        Route::put('/equipamentos/{id}/avancar', [ManutencaoEquipamentoController::class, 'avancarEstagio'])->name('equipamentos.avancar');
        Route::put('/equipamentos/{id}/cancelar', [ManutencaoEquipamentoController::class, 'cancelar'])->name('equipamentos.cancelar');
        Route::put('/equipamentos/{id}/baixa', [ManutencaoEquipamentoController::class, 'baixa'])->name('equipamentos.baixa');
    });
    
    // ROTA ALIAS para o menu (sem o .index)
    Route::get('/manutencao', [ManutencaoEquipamentoController::class, 'index'])->name('manutencao');
    // ========== FIM MANUTENÇÃO ==========

    // ========== ROTAS DE TREINAMENTOS ==========
    Route::prefix('treinamentos')->name('treinamentos.')->group(function () {
        Route::get('/', [App\Http\Controllers\TreinamentoController::class, 'index'])->name('index');
        Route::post('/{id}/concluir', [App\Http\Controllers\TreinamentoController::class, 'concluir'])->name('concluir');
        Route::post('/{id}/favoritar', [App\Http\Controllers\TreinamentoController::class, 'favoritar'])->name('favoritar');
        Route::post('/{id}/acessar', [App\Http\Controllers\TreinamentoController::class, 'registrarAcesso'])->name('acessar');
    });

// Rota principal (SEM o prefixo)
Route::get('/treinamentos', [App\Http\Controllers\TreinamentoController::class, 'index'])->name('treinamentos');
// ========== FIM TREINAMENTOS ==========

// Rota alias para o menu
Route::get('/treinamentos', [App\Http\Controllers\TreinamentoController::class, 'index'])->name('treinamentos');
// ========== FIM TREINAMENTOS ==========

    // ========== INTEGRAÇÕES ==========
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

    Route::get('/expedicao', function () {
        return view('pages.expedicao');
    })->name('expedicao');

    Route::get('/fabrica', function () {
        return view('pages.fabrica');
    })->name('fabrica');

    Route::get('/produtos', function () {
        return view('pages.produtos');
    })->name('produtos');
});