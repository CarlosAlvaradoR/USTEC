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
        $this->call(AreaSeeder::class);
        $this->call(GravedadSeeder::class);
        $this->call(TipoSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(EquiposIncidentesSeeder::class);
        $this->call(MaterialesSeeder::class);
    }
}
