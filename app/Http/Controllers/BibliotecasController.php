<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biblioteca;

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
        return view('create-biblioteca');
    }

    public function store(Request $request, $id)
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
            'biblioteca' => Biblioteca::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $biblioteca = Biblioteca::find($id);
    
        $biblioteca->nombre = $request->input('nombre');
    
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
