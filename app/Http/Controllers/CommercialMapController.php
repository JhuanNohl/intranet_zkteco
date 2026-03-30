<?php

namespace App\Http\Controllers;

use App\Models\CommercialMapArea;

class CommercialMapController extends Controller
{
    public function index()
    {
        $areas = CommercialMapArea::all();
        return view('commercial.map', compact('areas'));
    }
}