<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Kinship;
use Illuminate\Support\Facades\DB;

class KinshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        Kinship::create(['description' => 'ABUELO(A)']);
        Kinship::create(['description' => 'CUÑADO(A)']);
        Kinship::create(['description' => 'CONYUGE']);
        Kinship::create(['description' => 'HERMANO(A)']);
        Kinship::create(['description' => 'HIJASTRO(A)']);
        Kinship::create(['description' => 'HIJO(A)']);
        Kinship::create(['description' => 'NIETO(A)']);
        Kinship::create(['description' => 'NUERA']);
        Kinship::create(['description' => 'PADRE']);
        Kinship::create(['description' => 'MADRE']);
        Kinship::create(['description' => 'PRIMO(A)']);
        Kinship::create(['description' => 'SUEGRO(A)']);
        Kinship::create(['description' => 'TIO(A)']);
        Kinship::create(['description' => 'YERNO']);
        

        
    }
    
}
