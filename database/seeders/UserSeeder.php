<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User Administrador',
            'username' => 'u.admin',
            'email' => 'admin.admin@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Darwin Palacios',
            'username' => 'd.palacios',
            'email' => 'darwin@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Juan Carlos Guillen',
            'username' => 'jc.guillen',
            'email' => 'medico@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Medico');

        User::create([
            'name' => 'Veronica Diaz',
            'username' => 'v.diaz',
            'email' => 'diaz@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Medico');

        User::create([
            'name' => 'David Jacome',
            'username' => 'd.jacome',
            'email' => 'recepcion@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Recepcion');

        User::create([
            'name' => 'Diego Ruiz',
            'username' => 'r.ruiz',
            'email' => 'diego@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Recursos Humanos');
        
        // User::factory()->count(5)->create();
    }
}
