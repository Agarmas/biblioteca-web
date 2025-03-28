<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Persona::insert([
            ['nombre' => 'Antonio', 'edad' => 21],
            ['nombre' => 'Irene', 'edad' => 22],
            ['nombre' => 'Pablo', 'edad' => 23],
            ['nombre' => 'Marcos', 'edad' => 24],
        ]);
    }
}
