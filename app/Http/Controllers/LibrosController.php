<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function list()
    {
        return view('libros', [
            'libros' => Libro::all()
        ]);
    }

    public function create()
    {

    }

    public function read($id)
    {
        return view('libro', [
            'libro' => Libro::find($id)
        ]);
    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}
