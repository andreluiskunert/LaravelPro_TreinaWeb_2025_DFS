<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // 01/01/2026
        return view('home');
    
    }
}
