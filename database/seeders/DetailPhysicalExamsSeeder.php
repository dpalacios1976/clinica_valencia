<?php

namespace Database\Seeders;

use App\Models\DetailPhysicalExams;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPhysicalExamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailPhysicalExams::create([
            'description'=>'PIEL FANERAS','code'=>'1R',]);
        DetailPhysicalExams::create([
            'description'=>'CABEZA','code'=>'2R',]);
        DetailPhysicalExams::create([
                'description'=>'OJOS','code'=>'3R',]);
        DetailPhysicalExams::create([
            'description'=>'OIDOS','code'=>'4R',]);
        DetailPhysicalExams::create([
            'description'=>'NARIZ','code'=>'5R',]);
        DetailPhysicalExams::create([
            'description'=>'BOCA','code'=>'6R',]);
        DetailPhysicalExams::create([
            'description'=>'OROFARINGE','code'=>'7R',]);
        DetailPhysicalExams::create([
            'description'=>'CUELLO','code'=>'8R',]);
        DetailPhysicalExams::create([
            'description'=>'AXILAS - MAMAS','code'=>'9R',]);
        DetailPhysicalExams::create([
            'description'=>'TORAX','code'=>'10R',]);
        DetailPhysicalExams::create([
            'description'=>'ABDOMEN','code'=>'11R',]);
        DetailPhysicalExams::create([
            'description'=>'COLUMNA VERTEBRAL','code'=>'12R',]);
        DetailPhysicalExams::create([
            'description'=>'INGLE-PERINE','code'=>'13R',]);
        DetailPhysicalExams::create([
            'description'=>'MIEMBROS SUPERIORES','code'=>'14R',]);
        DetailPhysicalExams::create([
            'description'=>'MIEMBROS INFERIORES','code'=>'15R',]);
        DetailPhysicalExams::create([
            'description'=>'ORGANOS DE LOS SENTIDOS','code'=>'1S',]);
        DetailPhysicalExams::create([
            'description'=>'RESPIRATORIO','code'=>'2S',]);
        DetailPhysicalExams::create([
            'description'=>'CARDIO-VASCULAR','code'=>'3S',]);
        DetailPhysicalExams::create([
            'description'=>'DIGESTIVO','code'=>'4S',]);
        DetailPhysicalExams::create([
            'description'=>'GENITAL','code'=>'5S',]);
        DetailPhysicalExams::create([
            'description'=>'URINARIO','code'=>'6S',]);
        DetailPhysicalExams::create([
            'description'=>'MUSCULO-ESQUELETICO','code'=>'7S',]);
        DetailPhysicalExams::create([
            'description'=>'ENDOCRINO','code'=>'8S',]);
        DetailPhysicalExams::create([
            'description'=>'HEMO-LINFATICO','code'=>'9S',]);
        DetailPhysicalExams::create([
            'description'=>'NEUROLOGICO','code'=>'10S',]);
    }
}
