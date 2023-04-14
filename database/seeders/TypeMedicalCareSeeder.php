<?php

namespace Database\Seeders;

use App\Models\TypeMedicalCare;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeMedicalCareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeMedicalCare::create([
            'descripcion' => 'AMBULATORIO',
        ]);
        TypeMedicalCare::create([
            'descripcion' => 'EMERGENCIA',
        ]);
        TypeMedicalCare::create([
            'descripcion' => 'HOSPITALARIO',
        ]);
        TypeMedicalCare::create([
            'descripcion' => 'UCI',
        ]);
        TypeMedicalCare::create([
            'descripcion' => 'CIRUGÍA PROGRAMADA',
        ]);
    }
}
