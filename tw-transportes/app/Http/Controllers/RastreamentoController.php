<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RastreamentoController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Terça-feira,30/12/2025_revisão de noite
        
        return view('frete.rastreamento');

    }
}
