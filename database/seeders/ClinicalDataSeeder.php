<?php

namespace Database\Seeders;

use App\Models\ClinicalData;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClinicalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClinicalData::create([
            'description' =>'CARDIOPATÍA','code'=>'1',
        ]);
        ClinicalData::create([
            'description' =>'HIPERTENSIÓN','code'=>'2',
        ]);
        ClinicalData::create([
            'description' =>'ENF. C. VASCULAR','code'=>'3',
        ]);
        ClinicalData::create([
            'description' =>'ENDÓCRINO METABÓLICO','code'=>'4',
        ]);
        ClinicalData::create([
            'description' =>'CÁNCER','code'=>'5',
        ]);
        ClinicalData::create([
            'description' =>'TUBERCULOSIS','code'=>'6',
        ]);
        ClinicalData::create([
            'description' =>'ENF. MENTAL','code'=>'7',
        ]);
        ClinicalData::create([
            'description' =>'ENF. INFECCIOSA','code'=>'8',
        ]);
        ClinicalData::create([
            'description' =>'MAL FORMACIÓN','code'=>'9',
        ]);
        ClinicalData::create([
            'description' =>'OTRO','code'=>'10',
        ]);
    }

}
