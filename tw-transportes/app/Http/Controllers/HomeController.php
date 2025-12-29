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
        // Domingo 28/12/2025_
        return view('home');
    }
}
