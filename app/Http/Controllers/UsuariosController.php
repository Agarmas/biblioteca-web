<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

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

    public function store(Request $request, $id)
    {
        Usuario::create($request->all());

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
    
        $usuario->persona->nombre = $request->input('nombre');
        $usuario->persona->edad = $request->input('edad');
    
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
