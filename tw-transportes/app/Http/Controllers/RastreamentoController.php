<?php

namespace App\Http\Controllers;

use App\Models\Frete;
use Illuminate\Http\Request;

class RastreamentoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {   
        // Quarta-feira, 19/11/2025 de Noite
        $codigoRastreio = $request->input('codigo_rastreio', '');
        $frete = Frete::where('codigo_rastreio', $codigoRastreio)
        ->with('etapas')
        ->first();
        // 
        if(! $frete) {
            return redirect()->back()->with('error', 'frete não encontrado....');
        }
            //  estou revendo aulas pra entender melhor e fazerndo algumas correções 
    
        return view('frete.rastreamento', [
            'frete' => $frete
        ]
    );
    }
}
