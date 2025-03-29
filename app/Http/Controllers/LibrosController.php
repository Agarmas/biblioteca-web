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

    public function create()
    {
        return view('create-libro');
    }

    public function store(Request $request, $id)
    {
        Libro::create($request->all());

        return redirect('/libros');
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

    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);
    
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->prestado = $request->has('prestado') ? 1 : 0;
    
        $libro->save();

        return redirect('/libros');
    }
    

    public function destroy(Request $request, $id)
    {
        $libro = Libro::find($id);
        if (!$libro) {
            return redirect('/libros');
        }
        $libro->delete();

        return redirect('/libros');
    }
}
