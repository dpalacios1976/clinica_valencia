<?php

namespace Database\Seeders;

use App\Models\IdentityGender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdentityGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IdentityGender::create([
            'descripcion' => 'Femenino',
        ]);
        IdentityGender::create([
            'descripcion' => 'Masculino',
        ]);
        IdentityGender::create([
            'descripcion' => 'Ninguno',
        ]);
        IdentityGender::create([
            'descripcion' => 'No aplica',
        ]);
        IdentityGender::create([
            'descripcion' => 'No sabe / no responde',
        ]);
        IdentityGender::create([
            'descripcion' => 'Transfemenino',
        ]);
        IdentityGender::create([
            'descripcion' => 'Transmasculino',
        ]);
    }
}
