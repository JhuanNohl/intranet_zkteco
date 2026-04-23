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
use App\Http\Controllers\TreinamentoController;
use App\Http\Controllers\RHController; // Adicionado - Controller do RH

// ========== GRUPO COMERCIAL ==========
Route::prefix('commercial')->middleware('auth')->group(function () {
    Route::resource('documents', CommercialDocumentController::class)->names('commercial.documents');
    Route::get('map', [CommercialMapController::class, 'index'])->name('commercial.map');
});

// ========== ROTA PRINCIPAL ==========
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }
    return redirect()->route('login');
});

// ========== ROTAS PÚBLICAS ==========
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// ========== ROTAS PROTEGIDAS ==========
Route::middleware(['auth'])->group(function () {

    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');

    // Home
    Route::get('/home', [WelcomeController::class, 'index'])->name('home');
    
    // Comunicados
    Route::resource('comunicados', ComunicadoController::class);

    // ========== RH / DEPARTAMENTO PESSOAL ==========
    Route::prefix('rh')->name('rh.')->group(function () {
        // Página principal de Gestão de Pessoas
        Route::get('/', [RHController::class, 'index'])->name('index');
        
        // CIPA
        Route::get('/cipa', [RHController::class, 'cipa'])->name('cipa');
        
        // Sindicato
        Route::get('/sindicato', [RHController::class, 'sindicato'])->name('sindicato');
    });
    
    // Alias para compatibilidade com rota antiga
    Route::get('/gestao-pessoas', [RHController::class, 'index'])->name('gestao-pessoas');
    Route::get('/departamento-pessoal', [RHController::class, 'index'])->name('departamento-pessoal');

    // ========== MANUTENÇÃO ==========
    Route::prefix('manutencao')->name('manutencao.')->group(function () {
        Route::get('/', [ManutencaoEquipamentoController::class, 'index'])->name('index');
        Route::get('/equipamentos/stats', [ManutencaoEquipamentoController::class, 'getStats'])->name('equipamentos.stats');
        Route::get('/equipamentos/table', [ManutencaoEquipamentoController::class, 'getTableData'])->name('equipamentos.table');
        Route::post('/equipamentos', [ManutencaoEquipamentoController::class, 'store'])->name('equipamentos.store');
        Route::put('/equipamentos/{id}', [ManutencaoEquipamentoController::class, 'update'])->name('equipamentos.update');
        Route::delete('/equipamentos/{id}', [ManutencaoEquipamentoController::class, 'destroy'])->name('equipamentos.destroy');
        Route::put('/equipamentos/{id}/avancar', [ManutencaoEquipamentoController::class, 'avancarEstagio'])->name('equipamentos.avancar');
        Route::put('/equipamentos/{id}/cancelar', [ManutencaoEquipamentoController::class, 'cancelar'])->name('equipamentos.cancelar');
        Route::put('/equipamentos/{id}/baixa', [ManutencaoEquipamentoController::class, 'baixa'])->name('equipamentos.baixa');
    });
    // Alias para o menu
    Route::get('/manutencao', [ManutencaoEquipamentoController::class, 'index'])->name('manutencao');

    // ========== TREINAMENTOS ==========
    Route::prefix('treinamentos')->name('treinamentos.')->group(function () {
        Route::get('/', [TreinamentoController::class, 'index'])->name('index');
        Route::post('/{id}/concluir', [TreinamentoController::class, 'concluir'])->name('concluir');
        Route::post('/{id}/favoritar', [TreinamentoController::class, 'favoritar'])->name('favoritar');
        Route::post('/{id}/acessar', [TreinamentoController::class, 'registrarAcesso'])->name('acessar');
    });
    // Alias para o menu
    Route::get('/treinamentos', [TreinamentoController::class, 'index'])->name('treinamentos');

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

    // Rotas do Suporte
    Route::get('/suporte', function () {
        return view('pages.suporte');
    })->name('suporte');

    Route::get('/suporte/parametros', function () {
        return view('pages.suporte-parametros');
    })->name('suporte.parametros');

    Route::get('/suporte/licencas', function () {
        return view('pages.suporte-licencas');
    })->name('suporte.licencas');

    // ========== SETORES ==========
    Route::get('/comercial', function () {
        $documents = \App\Models\CommercialDocument::with('creator')->orderBy('category')->get();
        $areas = \App\Models\CommercialMapArea::all();
        return view('pages.comercial', compact('documents', 'areas'));
    })->name('comercial');

    Route::get('/financeiro', function () {
        return view('pages.financeiro');
    })->name('financeiro');

    Route::get('/desenvolvimento', function () {
        return view('pages.desenvolvimento');
    })->name('desenvolvimento');

    Route::get('/ti', function () {
        return view('pages.ti');
    })->name('ti');

    Route::get('/fabrica', function () {
        return view('pages.fabrica');
    })->name('fabrica');

    Route::get('/produtos', function () {
        return view('pages.produtos');
    })->name('produtos');
});