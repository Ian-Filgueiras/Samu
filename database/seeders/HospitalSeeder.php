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
        ]);

        Hospital::create([
            'name' => 'Hospital Geral Clériston Andrade',
            'location' => 'Feira de Santana - BA',
            'total_beds' => 250,
            'available_beds' => 80,
        ]);

        Hospital::create([
            'name' => 'Hospital de Câncer de Feira de Santana',
            'location' => 'Feira de Santana - BA',
            'total_beds' => 100,
            'available_beds' => 40,
        ]);

        Hospital::create([
            'name' => 'Hospital Estadual da Criança',
            'location' => 'Feira de Santana - BA',
            'total_beds' => 120,
            'available_beds' => 50,
        ]);

        Hospital::create([
            'name' => 'Hospital São Sebastião',
            'location' => 'Feira de Santana - BA',
            'total_beds' => 200,
            'available_beds' => 70,
        ]);
    }
}
