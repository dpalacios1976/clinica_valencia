<?php

namespace Database\Seeders;

use App\Models\Ethnicity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EthnicitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ethnicity::create([
            'descripcion' => 'AFROECUATORIANO',
        ]);
        Ethnicity::create([
            'descripcion' => 'AFRODESCENDIENTE',
        ]);
        Ethnicity::create([
            'descripcion' => 'BLANCO(A)',
        ]);
        Ethnicity::create([
            'descripcion' => 'INDÍGENA',
        ]);
        Ethnicity::create([
            'descripcion' => 'MESTIZO(A)',
        ]);
        Ethnicity::create([
            'descripcion' => 'MONTUBIO(A)',
        ]);
        Ethnicity::create([
            'descripcion' => 'MULATO(A)',
        ]);
        Ethnicity::create([
            'descripcion' => 'NEGRO(A)',
        ]);
        Ethnicity::create([
            'descripcion' => 'NO SABE',
        ]);
        Ethnicity::create([
            'descripcion' => 'OTRO',
        ]);
    
    }
}
