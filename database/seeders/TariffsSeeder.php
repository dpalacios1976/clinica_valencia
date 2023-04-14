<?php

namespace Database\Seeders;

use App\Models\Tariffs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TariffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tariffs::create([
            'description'=>'MSP','year'=>2014
        ]);
    }
}
