<?php

use App\Http\Controllers\LibrosController;
use App\Http\Controllers\BibliotecariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'libros' => LibrosController::class,
    'bibliotecarios' => BibliotecariosController::class,
]);