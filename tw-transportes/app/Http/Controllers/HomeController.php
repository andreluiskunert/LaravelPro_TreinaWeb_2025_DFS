<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    /**
     * Handle the incoming request.
     * Terça-feira, 30/12/2025_Revisão de Manhã
     */
    public function __invoke(Request $request)
    {
        //
        return view('home');
    }
}
