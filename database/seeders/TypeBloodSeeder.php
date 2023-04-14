<?php

namespace Database\Seeders;

use App\Models\TypeBlood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeBloodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_bloods')->insert([
            ['descripcion' => 'A+'],
            ['descripcion' => 'A-'],
            ['descripcion' => 'B+'],
            ['descripcion' => 'B-'],
            ['descripcion' => 'AB+'],
            ['descripcion' => 'AB-'],
            ['descripcion' => 'O+'],
            ['descripcion' => 'O-'],
        ]);

    }
}
