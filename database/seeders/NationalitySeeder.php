<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->insert([
            ['descripcion' => 'Alemana'],
            ['descripcion' => 'Argentina'],
            ['descripcion' => 'Boliviana'],
            ['descripcion' => 'Brasileña'],
            ['descripcion' => 'Canadiense'],
            ['descripcion' => 'Colombiana'],
            ['descripcion' => 'Costarricense'],
            ['descripcion' => 'Cubana'],
            ['descripcion' => 'Chilena'],
            ['descripcion' => 'China'],
            ['descripcion' => 'Dominicana'],
            ['descripcion' => 'Ecuatoriana'],
            ['descripcion' => 'Española'],
            ['descripcion' => 'Estadounidense'],
            ['descripcion' => 'Francesa'],
            ['descripcion' => 'Hondureño'],
            ['descripcion' => 'Inglesa'],
            ['descripcion' => 'Irlandesa'],
            ['descripcion' => 'Italiana'],
            ['descripcion' => 'Mexicana'],
            ['descripcion' => 'Panameña'],
            ['descripcion' => 'Paraguaya'],
            ['descripcion' => 'Peruana'],
            ['descripcion' => 'Rusa'],
            ['descripcion' => 'Uruguaya'],
            ['descripcion' => 'Venezolana'],
            ['descripcion' => 'Otra'],
        ]);
        
    }
}
