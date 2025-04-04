<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bibliotecario;
use App\Models\Usuario;

class Persona extends Model
{
    protected $fillable = [
        'nombre',
        'edad',
    ];

    public function bibliotecario()
    {
        return $this->hasOne(Bibliotecario::class);
    }

    public function usuario()
    {
        return $this->hasOne(Usuario::class);
    }
}
