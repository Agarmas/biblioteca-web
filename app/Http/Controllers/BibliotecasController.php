<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biblioteca;
use App\Models\Bibliotecario;

class BibliotecasController extends Controller
{
    public function index()
    {
        return view('bibliotecas', [
            'bibliotecas' => Biblioteca::all()
        ]);
    }

    public function create()
    {
        return view('create-biblioteca', [
            'bibliotecarios' => Bibliotecario::all(),
        ]);
    }

    public function store(Request $request)
    {
        Biblioteca::create($request->all());

        return redirect('/bibliotecas');
    }

    public function show($id)
    {
        return view('biblioteca', [
            'biblioteca' => Biblioteca::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('biblioteca', [
            'biblioteca' => Biblioteca::find($id),
            'bibliotecarios' => Bibliotecario::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $biblioteca = Biblioteca::find($id);
    
        $biblioteca->nombre = $request->input('nombre');
        $biblioteca->bibliotecario_id = $request->input('bibliotecario_id');
    
        $biblioteca->save();

        return redirect('/bibliotecas');
    }
    

    public function destroy(Request $request, $id)
    {
        $biblioteca = Biblioteca::find($id);
        if (!$biblioteca) {
            return redirect('/bibliotecas');
        }
        $biblioteca->delete();

        return redirect('/bibliotecas');
    }
}
