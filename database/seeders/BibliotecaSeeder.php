<?php

namespace Database\Seeders;

use App\Models\Biblioteca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Biblioteca::insert([
            ['nombre' => 'Biblioteca Montequinto', 'bibliotecario_id' => 1],
            ['nombre' => 'Biblioteca UPO', 'bibliotecario_id' => 2],
        ]);
    }
}
