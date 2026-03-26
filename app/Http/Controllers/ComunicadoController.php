<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use Illuminate\Http\Request;

class ComunicadoController extends Controller
{
    public function index()
    {
        try {
            $comunicados = Comunicado::ativos()
                ->orderBy('ordem')
                ->orderBy('created_at', 'desc')
                ->get();

            return response()->json($comunicados);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
