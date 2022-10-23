<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class); //Para crear los roles de los usuarios
        //$this->call(AccionesSeeder::class); //Para crear o no equipos
        $this->call(AreaSeeder::class);
        $this->call(GravedadSeeder::class);
        $this->call(TipoSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(EquiposIncidentesSeeder::class);
        $this->call(MaterialesSeeder::class);
    }
}
