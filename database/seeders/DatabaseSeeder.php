<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            'id'=> 1,
            'name' => 'Nelson Cliente',
            'email' => 'cliente@gmail.com',
            'password' => Hash::make('cliente'),
        ]);


        DB::table('users')->insert([
            'id'=> 2,
            'name' => 'Administador',
            'email' => 'adminitrador@gmail.com',
            'password' => Hash::make('adminitrador'),

        ]);


        DB::table('roles')->insert([
            'id'=> 1,
            'name' => 'user',
            'description' => 'Perfil de Usuario',
        ]);

        DB::table('roles')->insert([
            'id'=> 2,
            'name' => 'admin',
            'description' => 'Perfil de Administrador',
        ]);


        DB::table('role_user')->insert([
            'id'=> 1,
            'role_id'=> 1,
            'user_id'=> 1,

        ]);


        DB::table('role_user')->insert([
            'id'=> 2,
            'role_id'=> 2,
            'user_id'=> 2,

        ]);


        DB::table('produts')->insert([
            'name' => 'Producto 1',
            'price' => '123.45',
            'tax' => '0.05',
        ]);


        DB::table('produts')->insert([
            'name' => 'Producto 2',
            'price' => '45.65',
            'tax' => '0.15',
        ]);


        DB::table('produts')->insert([
            'name' => 'Producto 3',
            'price' => '39.73',
            'tax' => '0.12',
        ]);

        DB::table('produts')->insert([
            'name' => 'Producto 4',
            'price' => '250.00',
            'tax' => '0.08',
        ]);


        DB::table('produts')->insert([
            'name' => 'Producto 5',
            'price' => '59.35',
            'tax' => '0.10',
        ]);



    }
}
