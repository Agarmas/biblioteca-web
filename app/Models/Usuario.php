<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
