<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function index()
    {
        return view('libros', [
            'libros' => Libro::all()
        ]);
    }

    public function store()
    {
        Libro::create(request()->all());

        return redirect('/libros')->with('success', 'Libro creado correctamente.');
    }

    public function show($id)
    {
        return view('libro', [
            'libro' => Libro::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('libro', [
            'libro' => Libro::find($id)
        ]);
    }

    public function update()
    {
        $libro = Libro::find(request('id'));
        $libro->titulo = request('titulo');
        $libro->autor = request('autor');
        $libro->editorial = request('editorial');
        $libro->anio = request('anio');
        $libro->save();

        return redirect('/libros');
    }

    public function destroy()
    {
        $libro = Libro::find(request('id'));
        $libro->delete();

        return redirect('/libros');
    }
}
