<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Persona;

class UsuariosController extends Controller
{
    public function index()
    {
        return view('usuarios', [
            'usuarios' => Usuario::all()
        ]);
    }

    public function create()
    {
        return view('create-usuario');
    }

    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->input('nombre');
        $persona->edad = $request->input('edad');
        $persona->save();
        $usuario = new Usuario();
        $usuario->persona_id = $persona->id;
        $usuario->save();

        return redirect('/usuarios');
    }

    public function show($id)
    {
        return view('usuario', [
            'usuario' => Usuario::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('usuario', [
            'usuario' => Usuario::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $persona_id = $usuario->persona->id;
        $persona = Persona::find($persona_id);

        $persona->nombre = $request->input('nombre');
        $persona->edad = $request->input('edad');

        $persona->save();
        $usuario->save();

        return redirect('/usuarios');
    }
    

    public function destroy(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return redirect('/usuarios');
        }
        $usuario->delete();

        return redirect('/usuarios');
    }
}
