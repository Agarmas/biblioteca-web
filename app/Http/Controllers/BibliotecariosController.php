<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bibliotecario;
use App\Models\Persona;
use App\Models\Usuario;

class BibliotecariosController extends Controller
{
    public function index()
    {
        return view('bibliotecarios', [
            'bibliotecarios' => Bibliotecario::all()
        ]);
    }

    public function create()
    {
        return view('create-bibliotecario');
    }

    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->input('nombre');
        $persona->edad = $request->input('edad');
        $persona->save();
        $bibliotecario = new Bibliotecario();
        $bibliotecario->persona_id = $persona->id;
        $bibliotecario->save();

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
        $persona_id = $bibliotecario->persona->id;
        $persona = Persona::find($persona_id);

        $persona->nombre = $request->input('nombre');
        $persona->edad = $request->input('edad');

        $persona->save();
        $bibliotecario->save();

        return redirect('/bibliotecarios');
    }

    public function destroy(Request $request, $id)
    {
        $bibliotecario = Bibliotecario::find($id);
        $persona_id = $bibliotecario->persona->id;
        $persona = Persona::find($persona_id);
        if (!$bibliotecario || !$persona) {
            return redirect('/bibliotecarios');
        } 
        
        $bibliotecario->delete();
        
        if (!Usuario::firstWhere('persona_id', '=', $persona_id)) {
            $persona->delete();
        }


        return redirect('/bibliotecarios');
    }
}
