<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marital_statuses')->insert([
            ['descripcion' => 'Soltero/a'],
            ['descripcion' => 'Casado/a'],
            ['descripcion' => 'Divorsiado/a'],
            ['descripcion' => 'Viudo/a'],
            ['descripcion' => 'Union Libre'],
        ]);
        //marital_statuses
    }
}
