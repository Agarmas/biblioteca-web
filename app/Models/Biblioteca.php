<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function bibliotecario()
    {
        return $this->hasOne(Bibliotecario::class);
    }

    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
