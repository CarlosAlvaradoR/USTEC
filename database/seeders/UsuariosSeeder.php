<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insertar Información para el usuario administrador
        $user = User::create([
            'name'=> 'Admin', 
            'email'=> 'carlos2000emilioa@gmail.com', 
            'email_verified_at'=> date('Y-m-d H:m:s'), 
            'password'=> bcrypt('123456789'), 
            'status'=> 1, //Activo 
            'rol_id'=> 1,
        ]);
    }
}
