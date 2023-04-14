<?php

namespace Database\Seeders;

use App\Models\SexualOrientation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexualOrientationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SexualOrientation::create([
            'descripcion' => 'Bisexual',
        ]);
        SexualOrientation::create([
            'descripcion' => 'Gay',
        ]);
        SexualOrientation::create([
            'descripcion' => 'Heterosexual',
        ]);
        SexualOrientation::create([
            'descripcion' => 'Lesbiana',
        ]);
        SexualOrientation::create([
            'descripcion' => 'No sabe / no responde',
        ]);
        SexualOrientation::create([
            'descripcion' => 'No selecciona',
        ]);
    }
}
