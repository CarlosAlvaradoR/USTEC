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
            'name'=> 'Carlos', 
            'email'=> 'carlos2000emilioa@gmail.com', 
            'email_verified_at'=> date('Y-m-d H:m:s'), 
            'password'=> bcrypt('123456789'), 
            'status'=> 1, //Activo 
            'rol_id'=> 1,
        ]);

        //Insertar Información para el usuario Trabajador (TRABAJADOR DE OGTISE)
        $user = User::create([
            'name'=> 'Jescenia Melgarejo Príncipe', 
            'email'=> 'jesmelgarejo46@gmail.com', 
            'email_verified_at'=> date('Y-m-d H:m:s'), 
            'password'=> bcrypt('123456789'), 
            'status'=> 1, //Activo 
            'rol_id'=> 2,
        ]);
        $user = User::create([
            'name'=> 'Carlos Orellano', 
            'email'=> 'orellano428@gmail.com', 
            'email_verified_at'=> date('Y-m-d H:m:s'), 
            'password'=> bcrypt('123456789'), 
            'status'=> 1, //Activo 
            'rol_id'=> 2,
        ]);

        //Insertar Información para usuario de tipo Notificador (TIENE ACCESO A CREAR EQUIPOS)
        $user = User::create([
            'name'=> 'Ximena Azucena', 
            'email'=> 'ximena@gmail.com', 
            'email_verified_at'=> date('Y-m-d H:m:s'), 
            'password'=> bcrypt('123456789'), 
            'status'=> 1, //Activo 
            'rol_id'=> 3,
        ]);

        //Insertar Información para el usuario administrador
        $user = User::create([
            'name'=> 'Ariana', 
            'email'=> 'ariana@gmail.com', 
            'email_verified_at'=> date('Y-m-d H:m:s'), 
            'password'=> bcrypt('123456789'), 
            'status'=> 1, //Activo 
            'rol_id'=> 4,
        ]);
    }
}
