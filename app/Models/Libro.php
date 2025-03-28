<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'titulo',
        'autor',
        'prestado',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function biblioteca()
    {
        return $this->belongsTo(Biblioteca::class);
    }
}
