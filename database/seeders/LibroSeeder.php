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
            ['titulo' => '1984', 'autor' => 'George Orwell'],
            ['titulo' => 'La República', 'autor' => 'Platón'],
            ['titulo' => 'El Señor de los Anillos', 'autor' => 'J.R.R. Tolkien'],
            ['titulo' => 'Don Quijote de la Mancha', 'autor' => 'Miguel de Cervantes'],
            ['titulo' => 'El Discurso del Método', 'autor' => 'René Descartes'],
            ['titulo' => 'Política', 'autor' => 'Aristóteles'],
            ['titulo' => 'El Príncipe', 'autor' => 'Nicolás Maquiavelo'],
            ['titulo' => 'El Arte de la Guerra', 'autor' => 'Sun Tzu'],
            ['titulo' => 'La Odisea', 'autor' => 'Homero'],
            ['titulo' => 'La Ilíada', 'autor' => 'Homero'],
        ]);
    }
}
