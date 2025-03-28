<?php

use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [LibrosController::class, 'list']);

Route::get('libro/{id}', [LibrosController::class, 'read']);
