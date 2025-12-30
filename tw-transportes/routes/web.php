<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RastreamentoController;
use Illuminate\Support\Facades\Route;
// terça-feira, 30/12/2025_Revisão de manhã
Route::get('/', HomeController::class);
// terça-feira, 30/12/2025_Revisão de noite
Route::get('/rastreamento', RastreamentoController::class);



