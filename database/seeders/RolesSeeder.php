<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rol = Roles::create([
            'nombre' => 'Administrador'
        ]);
        $rol = Roles::create([
            'nombre' => 'Trabajador'
        ]);
        $rol = Roles::create([
            'nombre' => 'Notificador' //Va a tener el privilegio de crear equipos
        ]);
        $rol = Roles::create([
            'nombre' => 'Externos' // No va a tener el privilegio de crear equipos
        ]);
    }
}
