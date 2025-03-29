<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bibliotecario extends Model
{
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function biblioteca()
    {
        return $this->hasOne(Biblioteca::class);
    }
}
