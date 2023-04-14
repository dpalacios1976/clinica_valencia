<?php

namespace Database\Seeders;

use App\Models\ChaptersCie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChaptersCiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChaptersCie::create(['description' =>'CIERTAS ENFERMEDADES INFECCIOSAS Y PARASITARIAS (A00-B99)',]);
        ChaptersCie::create(['description' =>'TUMORES [NEOPLASIAS] (C00-D48)',]);
        ChaptersCie::create(['description' =>'ENFERMEDADES DE LA SANGRE Y DE LOS ORGANOS HEMATOPOYETICOS, Y CIERTOS TRASTORNOS QUE AFECTAN EL MECANISMO DE LA INMUNIDAD (D50-D89)',]);
        ChaptersCie::create(['description' =>'ENFERMEDADES ENDOCRINAS, NUTRICIONALES Y METABOLICAS (E00-E90)',]);
        ChaptersCie::create(['description' =>'TRASTORNOS MENTALES Y DEL COMPORTAMIENTO (F00-F99)',]);
        ChaptersCie::create(['description' =>'ENFERMEDADES DEL SISTEMA NERVIOSO (G00-G99)',]);
        ChaptersCie::create(['description' =>'ENFERMEDADES DEL OJO Y SUS ANEXOS (H00-H59)',]);
        ChaptersCie::create(['description' =>'ENFERMEDADES DEL OIDO Y DE LA APOFISIS MASTOIDES (H60-H95)',]);
        ChaptersCie::create(['description' =>'ENFERMEDADES DEL SISTEMA CIRCULATORIO (I00-I99)',]);
        ChaptersCie::create(['description' =>'ENFERMEDADES DEL SISTEMA RESPIRATORIO (J00-J99)',]);
        ChaptersCie::create(['description' =>'ENFERMEDADES DEL SISTEMA DIGESTIVO (K00-K93)',]);
        ChaptersCie::create(['description' =>'ENFERMEDADES DE LA PIEL Y DEL TEJIDO SUBCUTANEO (L00-L99)',]);
        ChaptersCie::create(['description' =>'ENFERMEDADES DEL SISTEMA OSTEOMUSCULAR Y DEL TEJIDO CONJUNTIVO (M00-M99)',]);
        ChaptersCie::create(['description' =>'ENFERMEDADES DEL SISTEMA GENITOURINARIO (N00-N99)',]);
        ChaptersCie::create(['description' =>'EMBARAZO, PARTO Y PUERPERIO (O00-O99)',]);
        ChaptersCie::create(['description' =>'CIERTAS AFECCIONES ORIGINADAS EN EL PERIODO PERINATAL (P00-P96)',]);
        ChaptersCie::create(['description' =>'MALFORMACIONES CONGENITAS, DEFORMIDADES Y ANOMALIAS CROMOSOMICAS (Q00-Q99)',]);
        ChaptersCie::create(['description' =>'SINTOMAS, SIGNOS Y HALLAZGOS ANORMALES CLINICOS Y DE LABORATORIO, NO CLASIFICADOS EN OTRA PARTE (R00-R99)',]);
        ChaptersCie::create(['description' =>'TRAUMATISMOS, ENVENENAMIENTO Y ALGUNAS OTRAS CONSECUENCIAS DE CAUSAS EXTERNAS (S00-T98)',]);
        ChaptersCie::create(['description' =>'CAUSAS EXTERNAS DE MORBILIDAD Y DE MORTALIDAD (V01-Y98)',]);
        ChaptersCie::create(['description' =>'FACTORES QUE INFLUYEN EN EL ESTADO DE SALUD Y CONTACTO CON LOS SERVICIOS DE SALUD (Z00-Z99)',]);
        ChaptersCie::create(['description' =>'CÓDIGOS PARA PROPÓSITOS ESPECIALES (U00-U99)',]);
            
    }
}
