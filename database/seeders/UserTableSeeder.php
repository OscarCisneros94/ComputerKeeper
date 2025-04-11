<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id = 1800000000000; //ponemos el id manualmente para evitar conflictos con la creacion de tecnicos(usuarios)
        $user->name = 'Administrador';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole('admin');

    }
}
