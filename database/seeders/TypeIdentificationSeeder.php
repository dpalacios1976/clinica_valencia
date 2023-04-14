<?php

namespace Database\Seeders;

use App\Models\TypeIdentification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeIdentificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeIdentification::create([
            'descripcion' => 'Cedula',
        ]);
        TypeIdentification::create([
            'descripcion' => 'Pasaporte',
        ]);
        TypeIdentification::create([
            'descripcion' => 'Visa',
        ]);
        TypeIdentification::create([
            'descripcion' => 'Carné Refugiado',
        ]);
    }
}
