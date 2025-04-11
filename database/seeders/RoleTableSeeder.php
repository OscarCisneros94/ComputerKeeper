<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleTecnico = Role::create(['name' => 'tecnico']);

        //Tecnicos
        Permission::create(['name' => 'VerTecnico'])->syncRoles([$roleAdmin,]);
        Permission::create(['name' => 'CrearTecnico'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'EditarTecnico'])->syncRoles([$roleAdmin,]);
        Permission::create(['name' => 'EliminarTecnico'])->syncRoles([$roleAdmin,]);

        //Clientes
        Permission::create(['name' => 'VerCliente'])->syncRoles([$roleAdmin, $roleTecnico]);
        Permission::create(['name' => 'CrearCliente'])->syncRoles([$roleAdmin, $roleTecnico]);
        Permission::create(['name' => 'EditarCliente'])->syncRoles([$roleAdmin, $roleTecnico]);
        Permission::create(['name' => 'EliminarCliente'])->syncRoles([$roleAdmin]);

        //Empresas
        Permission::create(['name' => 'VerEmpresa'])->syncRoles([$roleAdmin, $roleTecnico]);
        Permission::create(['name' => 'CrearEmpresa'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'EditarEmpresa'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'EliminarEmpresa'])->syncRoles([$roleAdmin]);

        //Equipos
        Permission::create(['name' => 'VerEquipo'])->syncRoles([$roleAdmin, $roleTecnico]);
        Permission::create(['name' => 'CrearEquipo'])->syncRoles([$roleAdmin, $roleTecnico]);
        Permission::create(['name' => 'EditarEquipo'])->syncRoles([$roleAdmin, $roleTecnico]);
        Permission::create(['name' => 'EliminarEquipo'])->syncRoles([$roleAdmin]);

        //Servicios
        Permission::create(['name' => 'VerServicio'])->syncRoles([$roleAdmin, $roleTecnico]);
        Permission::create(['name' => 'CrearServicio'])->syncRoles([$roleAdmin, $roleTecnico]);
        Permission::create(['name' => 'EditarServicio'])->syncRoles([$roleAdmin, $roleTecnico]);
        Permission::create(['name' => 'EliminarServicio'])->syncRoles([$roleAdmin]);
    }
}
