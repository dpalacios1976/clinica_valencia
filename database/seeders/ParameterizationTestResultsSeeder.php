<?php

namespace Database\Seeders;

use App\Models\ParameterizationTestResults;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParameterizationTestResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParameterizationTestResults::create([
            'description'=>'HCTO','unit_of_measure'=>'%','exam_groups_id'=>1]);

        ParameterizationTestResults::create([
            'description'=>'HB','unit_of_measure'=>'g / dl','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'VCM','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'RETICULOCITOS','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'VELOCIDAD DE SEDIMENTACIÓN','unit_of_measure'=>'mmh','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'HCM','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'DREPANOCITOS','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'PLAQUETAS','unit_of_measure'=>'mmc','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'CHCM','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'GRUPO-FACTOR Rh','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'LEUCOCITOS','unit_of_measure'=>'mmc','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'HIPOCROMA','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'COOMBS DIRECTO','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'METAM','unit_of_measure'=>'%','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'BASOF','unit_of_measure'=>'%','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'ANISOCITOSIS','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'COOMBS INDIRECTO','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'CAYAD','unit_of_measure'=>'%','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'MONOC','unit_of_measure'=>'%','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'POIQUILOCIT.','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'TIEMPO DE SANGRÍA','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'SEGME','unit_of_measure'=>'%','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'LINFO','unit_of_measure'=>'%','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'MICROCITOSIS','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'TIEMPO DEPROTROMBINA','unit_of_measure'=>'seg','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'EOSIN','unit_of_measure'=>'%','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'ATIPI','unit_of_measure'=>'%','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'POLICROMAT.','unit_of_measure'=>'','exam_groups_id'=>1]);
        ParameterizationTestResults::create([
            'description'=>'TIEMPO T.PARCIAL','unit_of_measure'=>'seg','exam_groups_id'=>1]);

        ParameterizationTestResults::create([
            'description'=>'DENSIDAD','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'pH','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'PROTEÍNA','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'GLUCOSA','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'CETONA','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'HEMOGLOBINA','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'BILIRRUBINA','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'UROBILINOGENO','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'NITRITO','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'LEUCOCITOS','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'LEUCOCITOS POR CAMPO','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'PIOCITOS POR CAMPO','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'ERITROCITOS POR CAMPO','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'CÉLULAS ALTAS','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'BACTERIAS','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'HONGOS','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'MOCO','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'CRISTALES','unit_of_measure'=>'','exam_groups_id'=>2]);
        ParameterizationTestResults::create([
            'description'=>'CILINDROS','unit_of_measure'=>'','exam_groups_id'=>2]);

        ParameterizationTestResults::create([
            'description'=>'COLOR','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'CONSIST.','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'pH','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'HEMOGLOBINA','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'GLÓBULOS ROJOS','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'POLIMORFOS','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'ESPORAS','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'MICELIOS','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'MOCO','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'FIBRAS','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'ALMIDÓN','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'GRASA','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'PROTOZOARIOS','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'QUISTE','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'TROFO ZOITO','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'HELMINTOS','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'HUEVO','unit_of_measure'=>'','exam_groups_id'=>3]);
        ParameterizationTestResults::create([
            'description'=>'LARVA','unit_of_measure'=>'','exam_groups_id'=>3]);

        ParameterizationTestResults::create([
            'description'=>'GLUCOSA EN AYUNAS','unit_of_measure'=>'P','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'GLUCOSA 2 HORAS','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'UREA','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'CREATININA','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'BILIRRUBINA TOTAL','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'BILIRRUBINA DIRECTA','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'ACIDO ÚRICO','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'PROTEÍNA TOTAL','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'ALBÚMINA','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'GLOBULINA','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'TRANSAMINASA PIRUVICA (ALT)','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'TRANSAMINASA OXALACETICA (AST)','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'FOSFATASA ALCALINA','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'FOSFATASA ACIDA','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'COLESTEROL TOTAL','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'COLESTEROL HDL','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'GLUCOSA LDL','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'TRIGLICÉRIDOS','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'HIERRO SERICO','unit_of_measure'=>'','exam_groups_id'=>4]);
        ParameterizationTestResults::create([
            'description'=>'AMILASA','unit_of_measure'=>'','exam_groups_id'=>4]);

        ParameterizationTestResults::create([
            'description'=>'VDRL','unit_of_measure'=>'','exam_groups_id'=>5]);
        ParameterizationTestResults::create([
            'description'=>'AGLUTINACIONES FEBRILES','unit_of_measure'=>'','exam_groups_id'=>5]);
        ParameterizationTestResults::create([
            'description'=>'LATEX','unit_of_measure'=>'','exam_groups_id'=>5]);
        ParameterizationTestResults::create([
            'description'=>'ASTO','unit_of_measure'=>'','exam_groups_id'=>5]);




    }
}
