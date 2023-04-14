<?php

namespace Database\Seeders;

use App\Models\OrgansSystems;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrgansSystemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrgansSystems::create([
            'description' =>'PIEL','code'=>'1',]);
        OrgansSystems::create([
            'description' =>'ORGANOS DE LOS SENTIDOS','code'=>'2',]);
        OrgansSystems::create([
            'description' =>'RESPIRATORIO','code'=>'3',]);
        OrgansSystems::create([    
            'description' =>'CARDIO-VASCULAR','code'=>'4',]);
        OrgansSystems::create([
            'description' =>'DIGESTIVO','code'=>'5',]);
        OrgansSystems::create([
            'description' =>'GENITO-URINARIO','code'=>'6',]);
        OrgansSystems::create([
            'description' =>'MÚSCULO-ESQUELÉTICO','code'=>'7',]);
        OrgansSystems::create([
            'description' =>'ENDOCRINO','code'=>'8',]);
        OrgansSystems::create([
            'description' =>'HEMO-LINFÁTICO','code'=>'9',]);
        OrgansSystems::create([
            'description' =>'NERVIOSO','code'=>'10',]);
        
    }
}
