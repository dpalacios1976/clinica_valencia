<?php

namespace Database\Seeders;

use App\Models\DetailVitalSigns;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailVitalSignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailVitalSigns::create([
            'description'=>'TEMPERATURA (ºC)']);
        DetailVitalSigns::create([    
            'description'=>'PRESION ARTERIAL SISTÓLICA (mmHg)']);
        DetailVitalSigns::create([    
                'description'=>'PRESION ARTERIAL DIASTÓLICA (mmHg)']);    
        DetailVitalSigns::create([
            'description'=>'PULSO / MINUTO']);
        DetailVitalSigns::create([    
            'description'=>'FRECUENCIA RESPIRATORIA (/min)']);
        DetailVitalSigns::create([
            'description'=>'PESO (kg)']);
        DetailVitalSigns::create([
            'description'=>'TALLA (cm)']);
        DetailVitalSigns::create([
            'description'=>'PERIMETRO ABDOMINAL (cm)']);
        DetailVitalSigns::create([
            'description'=>'HEMOGLOBINA CAPILLAR (g/dl)']);
        DetailVitalSigns::create([
            'description'=>'GLUCOSA CAPILLAR (mg/dl)']);
        DetailVitalSigns::create([
            'description'=>'PULSIOXIMETRIA (%)']);
       
    }
}
