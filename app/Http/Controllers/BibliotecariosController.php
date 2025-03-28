<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bibliotecario;

class BibliotecariosController extends Controller
{
    public function index()
    {
        return view('bibliotecarios', [
            'bibliotecarios' => Bibliotecario::all()
        ]);
    }

    public function store()
    {
        Bibliotecario::create(request()->all());

        return redirect('/bibliotecarios');
    }

    public function show($id)
    {
        return view('bibliotecario', [
            'bibliotecario' => Bibliotecario::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('bibliotecario', [
            'bibliotecario' => Bibliotecario::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $bibliotecario = Bibliotecario::find($id);

        $bibliotecario->nombre = $request->input('nombre');
        $bibliotecario->apellido = $request->input('apellido');

        $bibliotecario->save();

        return redirect('/bibliotecarios');
    }

    public function destroy(Request $request, $id)
    {
        $bibliotecario = Bibliotecario::find($id);
        if (!$bibliotecario) {
            return redirect('/bibliotecarios')->with('error', 'Bibliotecario no encontrado.');
        }
        $bibliotecario->delete();

        return redirect('/bibliotecarios');
    }
}
