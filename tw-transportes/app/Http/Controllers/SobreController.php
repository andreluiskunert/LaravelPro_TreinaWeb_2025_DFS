<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $conteudoDaView = view('sobre');
        // return 'Estou estudando Laravel Pro pela Treina Web';
        return $conteudoDaView;
    }
}
