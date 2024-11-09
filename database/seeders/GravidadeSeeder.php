<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gravidade;

class GravidadeSeeder extends Seeder
{
    public function run()
    {
        // Criar algumas gravidades de exemplo
        Gravidade::create([
            'nome' => 'Leve',
        ]);

        Gravidade::create([
            'nome' => 'Moderada',
        ]);

        Gravidade::create([
            'nome' => 'Grave',
        ]);

        Gravidade::create([
            'nome' => 'Crítica',
        ]);
    }
}
