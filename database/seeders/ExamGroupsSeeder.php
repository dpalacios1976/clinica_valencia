<?php

namespace Database\Seeders;

use App\Models\ExamGroups;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExamGroups::create(['description'=>'HEMATOLOGIA','code'=>1]);
        ExamGroups::create(['description'=>'UROANALISIS','code'=>2]);
        ExamGroups::create(['description'=>'COPROLOGICO','code'=>3]);
        ExamGroups::create(['description'=>'QUIMICA SANGUINEA','code'=>4]);
        ExamGroups::create(['description'=>'SEROLOGIA','code'=>5]);
        ExamGroups::create(['description'=>'BACTERIOLOGIA','code'=>6]);
        ExamGroups::create(['description'=>'OTROS','code'=>7]);


    }
}
