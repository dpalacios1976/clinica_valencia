<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Auditor']);
        $role3 = Role::create(['name'=>'Medico']);
        $role4 = Role::create(['name'=>'Gerente']);
        $role5 = Role::create(['name'=>'Recursos Humanos']);
        $role6 = Role::create(['name'=>'Enfermera']);
        $role7 = Role::create(['name'=>'Recepcion']);

        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6, $role7]);

        Permission::create(['name' => 'management'])->assignRole($role1);
        Permission::create(['name' => 'doctors'])->assignRole($role1);
        
        Permission::create(['name' => 'admin.users.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.store'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.show'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.update'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.active'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.inactive'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.updatepass'])->assignRole($role1);

        Permission::create(['name' => 'agendas.index'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'agendas.show'])->assignRole($role1);
        Permission::create(['name' => 'agendas.create'])->assignRole($role1);
        Permission::create(['name' => 'agendas.store'])->assignRole($role1);
        Permission::create(['name' => 'agendas.edit'])->assignRole($role1);
        Permission::create(['name' => 'agendas.update'])->assignRole($role1);
        Permission::create(['name' => 'agendas.cancelar'])->assignRole($role1);
        Permission::create(['name' => 'agendas.noasistio'])->assignRole($role1);

        Permission::create(['name' => 'doctors.index'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'doctors.show'])->assignRole($role1);
        Permission::create(['name' => 'doctors.create'])->assignRole($role1);
        Permission::create(['name' => 'doctors.store'])->assignRole($role1);
        Permission::create(['name' => 'doctors.edit'])->assignRole($role1);
        Permission::create(['name' => 'doctors.update'])->assignRole($role1);
        Permission::create(['name' => 'doctors.active'])->assignRole($role1);
        Permission::create(['name' => 'doctors.inactive'])->assignRole($role1);
        Permission::create(['name' => 'doctors.schedules'])->assignRole($role1);
        Permission::create(['name' => 'doctors.schedules.store'])->assignRole($role1);
        Permission::create(['name' => 'doctors.schedules.edit'])->assignRole($role1);

        Permission::create(['name' => 'establishments.index'])->syncRoles([$role1, $role5]);
        Permission::create(['name' => 'establishments.show'])->syncRoles([$role1, $role5]);
        Permission::create(['name' => 'establishments.create'])->assignRole($role1);
        Permission::create(['name' => 'establishments.store'])->assignRole($role1);
        Permission::create(['name' => 'establishments.edit'])->assignRole($role1);
        Permission::create(['name' => 'establishments.update'])->assignRole($role1);
        Permission::create(['name' => 'establishments.active'])->assignRole($role1);
        Permission::create(['name' => 'establishments.inactive'])->assignRole($role1);
        
        Permission::create(['name' => 'patients.index'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'patients.show'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'patients.create'])->assignRole($role1);
        Permission::create(['name' => 'patients.store'])->assignRole($role1);
        Permission::create(['name' => 'patients.edit'])->assignRole($role1);
        Permission::create(['name' => 'patients.update'])->assignRole($role1);
        Permission::create(['name' => 'patients.date'])->assignRole($role1);
        Permission::create(['name' => 'patients.date.store'])->assignRole($role1);
        Permission::create(['name' => 'patients.date.horas'])->assignRole($role1);

        Permission::create(['name' => 'schedules.doctors'])->assignRole($role1);

        Permission::create(['name' => 'atention.index'])->syncRoles([$role1, $role3]);
        // Permission::create(['name' => ''])->assignRole($role1);
        

    }
}
