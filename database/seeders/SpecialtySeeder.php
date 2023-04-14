<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cm = Specialty::create([
            'name' => 'ACUPUNTURA',
            'siglas' => 'ACU',
        ]);
        $cm->doctors()->sync([1, 2, 3, 4, 5]);

        $gin = Specialty::create([
            'name' => 'ALERGOLOGÍA',
            'siglas' => 'ALER',
        ]);
        $gin->doctors()->sync([6, 7, 8, 9, 10]);

        $ped = Specialty::create([
            'name' => 'ANATOMÍA PATOLÓGICA',
            'siglas' => 'ANPA',
        ]);
        $ped->doctors()->sync([11, 12, 13, 14, 15]);

        $odo = Specialty::create([
            'name' => 'ANESTESIOLOGÍA',
            'siglas' => 'ANES',
        ]);
        $odo->doctors()->sync([16,17, 18, 19, 20]);

        $mge = Specialty::create([
            'name' => 'AUDIOLOGÍA / FONIATRÍAL',
            'siglas' => 'AUD-FONI',
        ]);
        $mge->doctors()->sync([21, 22, 23, 24, 25]);

        $mfam = Specialty::create([
            'name' => 'AUXILIAR DE ENFERMERÍA',
            'siglas' => 'AUX-ENF',
        ]);
        $mfam->doctors()->sync([26, 27, 28, 29, 30, 1, 2, 3, 4, 5]);

        $mfam = Specialty::create([
            'name' => 'BIOLOGÍA MOLECULAR',
            'siglas' => 'BIO-MOL',
        ]);

        $mfam = Specialty::create([
            'name' => 'BIOQUÍMICA',
            'siglas' => 'BIOQ',
        ]);

        $mfam = Specialty::create([
            'name' => 'CARDIOLOGÍA',
            'siglas' => 'CARD',
        ]);

        $mfam = Specialty::create([
            'name' => 'CIRUGÍA CARDÍACA',
            'siglas' => 'CIRU-CARD',
        ]);

        $mfam = Specialty::create([
            'name' => 'CIRUGÍA CARDIOTORÁXICA',
            'siglas' => 'CIRU-CATO',
        ]);

        $mfam = Specialty::create([
            'name' => 'CIRUGÍA CARDIOVASCULAR',
            'siglas' => 'CIRU-CAVA',
        ]);

        $mfam = Specialty::create([
            'name' => 'CIRUGÍA DE CABEZA Y CUELLO',
            'siglas' => 'CIRU-CACUE',
        ]);

        $mfam = Specialty::create([
            'name' => 'CIRUGÍA GENERAL',
            'siglas' => 'CIRU-GENE',
        ]);

        $mfam = Specialty::create([
            'name' => 'CIRUGÍA ORTOPÉDICA Y TRAUMATOLOGÍA',
            'siglas' => 'CIR-ORTTRA',
        ]);

        $mfam = Specialty::create([
            'name' => 'CIRUGÍA PEDIÁTRICA',
            'siglas' => 'CIRU-PEDI',
        ]);

        $mfam = Specialty::create([
            'name' => 'CIRUGÍA PLÁSTICA Y RECONSTRUCTIVA',
            'siglas' => 'CIR-PLAREC',
        ]);

        $mfam = Specialty::create([
            'name' => 'CIRUGÍA TORÁCICA',
            'siglas' => 'CIRU-TORA',
        ]);

        $mfam = Specialty::create([
            'name' => 'CIRUGÍA VASCULAR Y ENDOVASCULAR',
            'siglas' => 'CIRU-VASEN',
        ]);

        $mfam = Specialty::create([
            'name' => 'DERMATOLOGÍA',
            'siglas' => 'DERMA',
        ]);

        $mfam = Specialty::create([
            'name' => 'EMERGENCIA',
            'siglas' => 'EMER',
        ]);

        $mfam = Specialty::create([
            'name' => 'ENDOCRINOLOGÍA',
            'siglas' => 'ENDOC',
        ]);

        $mfam = Specialty::create([
            'name' => 'ENFERMERÍA',
            'siglas' => 'ENFER',
        ]);

        $mfam = Specialty::create([
            'name' => 'EPIDEMIOLOGÍA',
            'siglas' => 'EPID',
        ]);

        $mfam = Specialty::create([
            'name' => 'FISIATRÍA',
            'siglas' => 'FISI',
        ]);

        $mfam = Specialty::create([
            'name' => 'GASTROENTEROLOGÍA',
            'siglas' => 'GASTRO',
        ]);

        $mfam = Specialty::create([
            'name' => 'GERIATRÍA Y GERONTOLOGÍA',
            'siglas' => 'GERI-GERO',
        ]);

        $mfam = Specialty::create([
            'name' => 'GINECOLOGÍA Y OBSTETRICIA',
            'siglas' => 'GINE-OBS',
        ]);

        $mfam = Specialty::create([
            'name' => 'HEMATOLOGÍA',
            'siglas' => 'HEMA',
        ]);

        $mfam = Specialty::create([
            'name' => 'HOMEOPATÍA',
            'siglas' => 'HOME',
        ]);

        $mfam = Specialty::create([
            'name' => 'IMAGENOLOGÍA Y DIAGNÓSTICO POR IMAGEN',
            'siglas' => 'IMAG-DG',
        ]);

        $mfam = Specialty::create([
            'name' => 'INFECTOLOGÍA',
            'siglas' => 'INFEC',
        ]);

        $mfam = Specialty::create([
            'name' => 'INMUNOLOGÍA',
            'siglas' => 'INMU',
        ]);

        $mfam = Specialty::create([
            'name' => 'LABORATORIO CLÍNICO E HISTOPATOLÓGICO',
            'siglas' => 'LABO-CLI',
        ]);

        $mfam = Specialty::create([
            'name' => 'MASTOLOGÍA',
            'siglas' => 'MAST',
        ]);

        $mfam = Specialty::create([
            'name' => 'MAXILOFACIAL',
            'siglas' => 'MAXI',
        ]);

        $mfam = Specialty::create([
            'name' => 'MEDICINA FORENSE, MEDICINA LEGAL',
            'siglas' => 'MF-ML',
        ]);

        $mfam = Specialty::create([
            'name' => 'MEDICINA AEROESPACIAL',
            'siglas' => 'MED-AER',
        ]);

        $mfam = Specialty::create([
            'name' => 'MEDICINA CRÍTICA',
            'siglas' => 'MED-CRIT',
        ]);

        $mfam = Specialty::create([
            'name' => 'MEDICINA DE EMERGENCIA',
            'siglas' => 'MED-EMER',
        ]);

        $mfam = Specialty::create([
            'name' => 'MEDICINA DEL DEPORTE',
            'siglas' => 'MED-DEP',
        ]);

        $mfam = Specialty::create([
            'name' => 'MEDICINA DEL TRABAJO, MEDICINA OCUPACIONAL',
            'siglas' => 'METR-MEOC',
        ]);

        $mfam = Specialty::create([
            'name' => 'MEDICINA FAMILIAR',
            'siglas' => 'MEDI-FAMI',
        ]);

        $mfam = Specialty::create([
            'name' => 'MEDICINA GENERAL',
            'siglas' => 'MEDI-GENE',
        ]);

        $mfam = Specialty::create([
            'name' => 'MEDICINA INTERNA',
            'siglas' => 'MEDI-INTE',
        ]);

        $mfam = Specialty::create([
            'name' => 'MEDICINA NUCLEAR',
            'siglas' => 'MEDI-NUCL',
        ]);

        $mfam = Specialty::create([
            'name' => 'MEDICINA RURAL',
            'siglas' => 'MEDI-RURA',
        ]);

        $mfam = Specialty::create([
            'name' => 'MICROBIOLOGÍA',
            'siglas' => 'MICRO',
        ]);

        $mfam = Specialty::create([
            'name' => 'NEFROLOGÍA',
            'siglas' => 'NEFRO',
        ]);

        $mfam = Specialty::create([
            'name' => 'NEONATOLOGÍA',
            'siglas' => 'NEONA',
        ]);

        $mfam = Specialty::create([
            'name' => 'NEUROCIRUGÍA',
            'siglas' => 'NEURO',
        ]);

        $mfam = Specialty::create([
            'name' => 'NEUROFISIOLOGÍA CLÍNICA',
            'siglas' => 'NEUR-CLIN',
        ]);

        $mfam = Specialty::create([
            'name' => 'NEUROLOGÍA',
            'siglas' => 'NEUROL',
        ]);

        $mfam = Specialty::create([
            'name' => 'NEUROPEDIATRÍA',
            'siglas' => 'NEUR-PED',
        ]);

        $mfam = Specialty::create([
            'name' => 'NEUROPSICOLOGÍA',
            'siglas' => 'NEUR-PSIC',
        ]);

        $mfam = Specialty::create([
            'name' => 'NUTRICIÓN',
            'siglas' => 'NUTRI',
        ]);

        $mfam = Specialty::create([
            'name' => 'OBSTETRICIA',
            'siglas' => 'OBSTR',
        ]);

        $mfam = Specialty::create([
            'name' => 'ODONTOLOGÍA',
            'siglas' => 'ODONT',
        ]);

        $mfam = Specialty::create([
            'name' => 'OFTALMOLOGÍA',
            'siglas' => 'OFTAM',
        ]);

        $mfam = Specialty::create([
            'name' => 'ONCOLOGÍA',
            'siglas' => 'ONCO',
        ]);

        $mfam = Specialty::create([
            'name' => 'OTORRINOLARINGOLOGÍA',
            'siglas' => 'OTORO',
        ]);

        $mfam = Specialty::create([
            'name' => 'PARASITOLOGÍA',
            'siglas' => 'PARAS',
        ]);

        $mfam = Specialty::create([
            'name' => 'PATOLOGÍA CLÍNICA',
            'siglas' => 'PATP-CLI',
        ]);

        $mfam = Specialty::create([
            'name' => 'PEDIATRÍA',
            'siglas' => 'PEDI',
        ]);

        $mfam = Specialty::create([
            'name' => 'PROCTOLOGÍA',
            'siglas' => 'PROC',
        ]);

        $mfam = Specialty::create([
            'name' => 'PSICOLOGÍA CLÍNICA',
            'siglas' => 'PSIC-CLIN',
        ]);

        $mfam = Specialty::create([
            'name' => 'PSIQUIATRÍA',
            'siglas' => 'PSIQ',
        ]);

        $mfam = Specialty::create([
            'name' => 'REUMATOLOGÍA',
            'siglas' => 'REUMA',
        ]);

        $mfam = Specialty::create([
            'name' => 'TERAPIA NEURAL',
            'siglas' => 'TERA-NEU',
        ]);

        $mfam = Specialty::create([
            'name' => 'ULTRASONIDO',
            'siglas' => 'ULTR',
        ]);

        $mfam = Specialty::create([
            'name' => 'UROLOGÍA',
            'siglas' => 'UROLO',
        ]);


    }
}
