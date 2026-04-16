<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RHController extends Controller
{
    /**
     * Exibe a página principal de Gestão de Pessoas
     */
    public function index()
    {
        // A view está em pages/departamento-pessoal.blade.php
        return view('pages.departamento-pessoal');
    }

    /**
     * Exibe a página da CIPA
     */
    public function cipa()
    {
        return view('rh.cipa');
    }

    /**
     * Exibe a página do Sindicato
     */
    public function sindicato()
    {
        return view('rh.sindicato');
    }
}