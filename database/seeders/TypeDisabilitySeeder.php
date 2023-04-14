<?php

namespace Database\Seeders;
use App\Models\TypeDisability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeDisabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_disabilities')->insert([
            ['descripcion' => 'AUDITIVA'],
            ['descripcion' => 'FISICA'],
            ['descripcion' => 'INTELECTUAL'],
            ['descripcion' => 'LENGUAJE'],
            ['descripcion' => 'PSICOSOCIAL'],
            ['descripcion' => 'VISUAL'],
          
        ]);
    }
}
