<?php

namespace Database\Seeders;

use App\Models\Insurance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Insurance::create([
            'descripcion' => 'IESS',
        ]);
        Insurance::create([
            'descripcion' => 'ISFFA',
        ]);

        Insurance::create([
            'descripcion' => 'ISSPOL',
        ]);

        Insurance::create([
            'descripcion' => 'NO TIENE SEGURO',
        ]);

        Insurance::create([
         'descripcion' => 'PRIVADO',
     ]);

        Insurance::create([
            'descripcion' => 'ASISKEN',
        ]);

        Insurance::create([
            'descripcion' => 'BEST DOCTORS',
        ]);

        Insurance::create([
            'descripcion' => 'BLUECARD',
        ]);

        Insurance::create([
           'descripcion' => 'BMI',
        ]); 

        Insurance::create([
            'descripcion' => 'CONFIAMED',
         ]); 

         Insurance::create([
            'descripcion' => 'ECUASANITAS',
         ]); 

         Insurance::create([
            'descripcion' => 'LATINA SALUD',
         ]);

         Insurance::create([
            'descripcion' => 'MED-EC S.A.',
         ]);

         Insurance::create([
            'descripcion' => 'HUMANA',
         ]);

         Insurance::create([
            'descripcion' => 'CRUZ BLANCA',
         ]);

         Insurance::create([
            'descripcion' => 'INMEDICAL',
         ]);

         Insurance::create([
            'descripcion' => 'MEDIKEN',
         ]);

         Insurance::create([
            'descripcion' => 'VITALPLAN',
         ]);

         Insurance::create([
            'descripcion' => 'PLUSMEDICAL',
         ]);

         Insurance::create([
            'descripcion' => 'PRIMEPRE',
         ]);

         Insurance::create([
            'descripcion' => 'SALUDSA',
         ]);

         Insurance::create([
            'descripcion' => 'VIDASANA',
         ]);

         Insurance::create([
            'descripcion' => 'TRANSMEDICAL',
         ]);

         Insurance::create([
            'descripcion' => 'VUMILATINA',
         ]);

         Insurance::create([
            'descripcion' => 'ALPHAPLUS',
         ]);

         Insurance::create([
            'descripcion' => 'PANAMERICAN LIFE',
         ]);

         Insurance::create([
            'descripcion' => 'AÑOS DORADOS',
         ]);

         Insurance::create([
            'descripcion' => 'BUPA',
         ]);

         Insurance::create([
            'descripcion' => 'LIBERTY',
         ]);

         Insurance::create([
            'descripcion' => 'PRIVILEGIO',
         ]);

         Insurance::create([
            'descripcion' => 'TECNISEGUROS',
         ]);

         Insurance::create([
            'descripcion' => 'SUCRE',
         ]);



    }
}
