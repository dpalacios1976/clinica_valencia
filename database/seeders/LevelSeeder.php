<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create(['descripcion' => 'Primer nivel']);
        Level::create(['descripcion' => 'Segundo nivel']);
        Level::create(['descripcion' => 'Tercer nivel']);
        Level::create(['descripcion' => 'Cuarto nivel']);
    }
}
