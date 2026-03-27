<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Buscar comunicados ativos
        $comunicados = Comunicado::ativos()
            ->orderBy('ordem', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        // Retorna a view welcome com os comunicados
        return view('welcome', compact('comunicados'));
    }
}
