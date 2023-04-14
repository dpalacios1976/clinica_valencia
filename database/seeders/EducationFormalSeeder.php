<?php

namespace Database\Seeders;

use App\Models\EducationFormal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationFormalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EducationFormal::create([
            'descripcion' => 'Pre-escolar',
        ]);
        EducationFormal::create([
            'descripcion' => '(Preparatoria) 1er grado. Educacion general basica',
        ]);
        EducationFormal::create([
            'descripcion' => '(Basica Elemental) 2do, 3er y 4to grados. Educacion general basica',
        ]);
        EducationFormal::create([
            'descripcion' => '(Basica Media) 5to, 6to y 7mo grados. Educacion general basica',
        ]);
        EducationFormal::create([
            'descripcion' => '(Basica Superior) 8vo, 9no y 10mo grados. Educacion general basica',
        ]);
        EducationFormal::create([
            'descripcion' => '1er año de Bachillerato general Unificado',
        ]);
        EducationFormal::create([
            'descripcion' => '2do año de Bachillerato general Unificado',
        ]);
        EducationFormal::create([
            'descripcion' => '3er año de Bachillerato general Unificado',
        ]);
        EducationFormal::create([
            'descripcion' => 'Tecnico Superior',
        ]);
        EducationFormal::create([
            'descripcion' => 'Tecnologo Superior',
        ]);
        EducationFormal::create([
            'descripcion' => '3er nivel (Titulo Profesional Universitario)',
        ]);
        EducationFormal::create([
            'descripcion' => 'Maestría',
        ]);
        EducationFormal::create([
            'descripcion' => 'Doctorado',
        ]);
        
    }
}
