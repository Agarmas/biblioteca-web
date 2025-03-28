<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Libro::insert([
            ['titulo' => '1984', 'autor' => 'George Orwell', 'biblioteca_id' => '1'],
            ['titulo' => 'La República', 'autor' => 'Platón', 'biblioteca_id' => '1'],
            ['titulo' => 'El Señor de los Anillos', 'autor' => 'J.R.R. Tolkien', 'biblioteca_id' => '1'],
            ['titulo' => 'Don Quijote de la Mancha', 'autor' => 'Miguel de Cervantes', 'biblioteca_id' => '1'],
            ['titulo' => 'El Discurso del Método', 'autor' => 'René Descartes', 'biblioteca_id' => '1'],
            ['titulo' => 'Política', 'autor' => 'Aristóteles', 'biblioteca_id' => '2'],
            ['titulo' => 'El Príncipe', 'autor' => 'Nicolás Maquiavelo', 'biblioteca_id' => '2'],
            ['titulo' => 'El Arte de la Guerra', 'autor' => 'Sun Tzu', 'biblioteca_id' => '2'],
            ['titulo' => 'La Odisea', 'autor' => 'Homero', 'biblioteca_id' => '2'],
            ['titulo' => 'La Ilíada', 'autor' => 'Homero', 'biblioteca_id' => '2'],
        ]);
    }
}
