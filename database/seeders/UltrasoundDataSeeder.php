<?php

namespace Database\Seeders;

use App\Models\UltrasoundData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UltrasoundDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UltrasoundData::create(['description'=>'DIÁMETRO BIPARIETAL']);
        UltrasoundData::create(['description'=>'LONGITUD FEMUR']);
        UltrasoundData::create(['description'=>'PERÍMETRO ABDOMINAL']);
        UltrasoundData::create(['description'=>'FUNDICA']);
        UltrasoundData::create(['description'=>'MARGINAL']);
        UltrasoundData::create(['description'=>'PREVIA']);
        UltrasoundData::create(['description'=>'NORMAL']);
        UltrasoundData::create(['description'=>'AUMENTADO']);
        UltrasoundData::create(['description'=>'DISMINUIDO']);
        UltrasoundData::create(['description'=>'UNICO']);
        UltrasoundData::create(['description'=>'MULTIPLE']);
        UltrasoundData::create(['description'=>'SEXO (M-F)']);
        UltrasoundData::create(['description'=>'G. MADUREZ PLACENTA']);
        UltrasoundData::create(['description'=>'PESO FETAL']);



    }
}
