<?php

use App\Http\Controllers\BibliotecasController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\BibliotecariosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'libros' => LibrosController::class,
    'bibliotecarios' => BibliotecariosController::class,
    'usuarios' => UsuariosController::class,
    'bibliotecas' => BibliotecasController::class,
]);