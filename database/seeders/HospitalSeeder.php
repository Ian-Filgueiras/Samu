<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hospital;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hospital::create([
            'name' => 'Hospital da Mulher',
            'location' => 'Feira de Santana - BA',
            'total_beds' => 150,
            'available_beds' => 50,
            'latitude' => -12.2415,  // Exemplo de latitude
            'longitude' => -38.9786, // Exemplo de longitude
        ]);

        Hospital::create([
            'name' => 'Hospital Geral Clériston Andrade',
            'location' => 'Feira de Santana - BA',
            'total_beds' => 250,
            'available_beds' => 80,
            'latitude' => -12.2774,  // Exemplo de latitude
            'longitude' => -38.9405, // Exemplo de longitude
        ]);

        Hospital::create([
            'name' => 'Lopes Rodrigues',
            'location' => 'Feira de Santana - BA',
            'total_beds' => 100,
            'available_beds' => 40,
            'latitude' => -12.2696,  // Exemplo de latitude
            'longitude' => -38.9394, // Exemplo de longitude
        ]);

        Hospital::create([
            'name' => 'Hospital Estadual da Criança',
            'location' => 'Feira de Santana - BA',
            'total_beds' => 120,
            'available_beds' => 50,
            'latitude' => -12.2750,  // Exemplo de latitude
            'longitude' => -38.9388, // Exemplo de longitude
        ]);

    }
}
