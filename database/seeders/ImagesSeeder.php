<?php

namespace Database\Seeders;

use App\Models\Images;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Images::create(['description'=>'R-X CONVENCIONAL']);
        Images::create(['description'=>'TOMOGRAFÍA']);
        Images::create(['description'=>'RESONANCIA']);
        Images::create(['description'=>'ECOGRAFÍA']);
        Images::create(['description'=>'PROCEDIMIENTO']);
        Images::create(['description'=>'OTROS']);
    }
}
