<?php

namespace Database\Seeders;

use App\Models\Bibliotecario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BibliotecarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bibliotecario::insert([
            ['persona_id' => 1],
            ['persona_id' => 2],
        ]);
    }
}
