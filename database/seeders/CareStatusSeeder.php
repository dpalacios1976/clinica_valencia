<?php

namespace Database\Seeders;

use App\Models\CareStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CareStatus::create([
            'descripcion' => 'Registrado',
        ]);
        CareStatus::create([
            'descripcion' => 'Finalizado',
        ]);
        CareStatus::create([
            'descripcion' => 'Anulado',
        ]);
    }
}
