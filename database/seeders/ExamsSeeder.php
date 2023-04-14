<?php

namespace Database\Seeders;

use App\Models\Exams;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exams::create(['description'=>'BIOMETRIA HEMÁTICA','exam_groups_id'=>1]);
        Exams::create(['description'=>'PLAQUETAS','exam_groups_id'=>1]);
        Exams::create(['description'=>'GRUPO SANGUINEO','exam_groups_id'=>1]);
        Exams::create(['description'=>'RETICULOCITOS','exam_groups_id'=>1]);
        Exams::create(['description'=>'HEMATOZOARIO','exam_groups_id'=>1]);
        Exams::create(['description'=>'CÉLULA L.E.','exam_groups_id'=>1]);
        Exams::create(['description'=>'TIEMPO DE COAGULACION','exam_groups_id'=>1]);

        Exams::create(['description'=>'ELEMENTAL Y MICROSCOPIO','exam_groups_id'=>2]);
        Exams::create(['description'=>'GOTA FRESCA','exam_groups_id'=>2]);
        Exams::create(['description'=>'PRUEBA DE EMBARAZO','exam_groups_id'=>2]);

        Exams::create(['description'=>'COPROPARASITARIO','exam_groups_id'=>3]);
        Exams::create(['description'=>'COPRO SERIADO','exam_groups_id'=>3]);
        Exams::create(['description'=>'SANGRE OCULTA','exam_groups_id'=>3]);
        Exams::create(['description'=>'INVESTIGACIÓN DE POLIMORFOS','exam_groups_id'=>3]);
        Exams::create(['description'=>'INVESTIGACIÓN DE ROTAVIRUS','exam_groups_id'=>3]);

        Exams::create(['description'=>'GLUCOSA EN AYUNAS','exam_groups_id'=>4]);
        Exams::create(['description'=>'GLUCOSA POST','exam_groups_id'=>4]);
        Exams::create(['description'=>'PRANDIAL 2 HORAS','exam_groups_id'=>4]);
        Exams::create(['description'=>'UREA','exam_groups_id'=>4]);
        Exams::create(['description'=>'CREATININA','exam_groups_id'=>4]);
        Exams::create(['description'=>'BILIRRUBINA TOTAL','exam_groups_id'=>4]);
        Exams::create(['description'=>'BILIRRUBINA DIRECTA','exam_groups_id'=>4]);
        Exams::create(['description'=>'ACIDO URICO','exam_groups_id'=>4]);
        Exams::create(['description'=>'PROTEINA TOTAL','exam_groups_id'=>4]);
        Exams::create(['description'=>'ALBUMINA','exam_groups_id'=>4]);
        Exams::create(['description'=>'GLOBULINA','exam_groups_id'=>4]);
        Exams::create(['description'=>'TRANSAMINASA PIRÚVICA (ALT)','exam_groups_id'=>4]);
        Exams::create(['description'=>'TRANSAMINASA OXALACÉTICA (AST)','exam_groups_id'=>4]);
        Exams::create(['description'=>'FOSFATA ACIDA','exam_groups_id'=>4]);
        Exams::create(['description'=>'COLESTEROL TOTAL','exam_groups_id'=>4]);
        Exams::create(['description'=>'COLESTEROL HDL','exam_groups_id'=>4]);
        Exams::create(['description'=>'COLESTEROL LDL','exam_groups_id'=>4]);
        Exams::create(['description'=>'TRIGLICERIDOS','exam_groups_id'=>4]);
        Exams::create(['description'=>'HIERRO SERICO','exam_groups_id'=>4]);
        Exams::create(['description'=>'AMILASA','exam_groups_id'=>4]);

        Exams::create(['description'=>'VDRL','exam_groups_id'=>5]);
        Exams::create(['description'=>'AGRUTINACIONES FEBRILES','exam_groups_id'=>5]);
        Exams::create(['description'=>'LATEX','exam_groups_id'=>5]);
        Exams::create(['description'=>'ASTO','exam_groups_id'=>5]);

        Exams::create(['description'=>'GRAM','exam_groups_id'=>6]);
        Exams::create(['description'=>'ZIEHL','exam_groups_id'=>6]);
        Exams::create(['description'=>'HONGOS','exam_groups_id'=>6]);
        Exams::create(['description'=>'FRESCO','exam_groups_id'=>6]);
        Exams::create(['description'=>'CULTIVO - ANTIBIOGRAMA','exam_groups_id'=>6]);
        Exams::create(['description'=>'MUESTRA DE','exam_groups_id'=>6]);




    }
}
