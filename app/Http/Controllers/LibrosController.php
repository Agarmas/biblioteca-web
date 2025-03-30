<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Usuario;
use App\Models\Biblioteca;

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
        return view('create-libro', [
            'usuarios' => Usuario::all(),
            'bibliotecas' => Biblioteca::all(),
        ]);
    }

    public function store(Request $request)
    {
        Libro::create($request->all());

        return redirect('/libros');
    }

    public function show($id)
    {
        return view('libro', [
            'libro' => Libro::find($id),
            'usuarios' => Usuario::all(),
            'bibliotecas' => Biblioteca::all(),
        ]);
    }

    public function edit($id)
    {
        return view('libro', [
            'libro' => Libro::find($id),
            'usuarios' => Usuario::all(),
            'bibliotecas' => Biblioteca::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);
    
        $libro->titulo = $request->input('titulo');
        $libro->autor = $request->input('autor');
        $libro->biblioteca_id = $request->input('biblioteca_id');
        $prestado = $request->input('usuario_id');
        if ($prestado) {
            $libro->usuario_id = $prestado;
            $libro->prestado = true;
        } else {
            $libro->usuario_id = null;
            $libro->prestado = false;
        }

    
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
