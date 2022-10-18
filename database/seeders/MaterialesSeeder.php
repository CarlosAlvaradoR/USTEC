<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materiales;
class MaterialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Materiales::create([
            'nombre' => 'Tinta de impresora', 
            'stock' => 6
        ]);
        Materiales::create([
            'nombre' => 'Cartucho de impresoras', 
            'stock' => 18
        ]);
        Materiales::create([
            'nombre' => 'Silicón Multiusos', 
            'stock' => 10
        ]);
        Materiales::create([
            'nombre' => 'Cámara Térmica', 
            'stock' => 10
        ]);
        Materiales::create([
            'nombre' => 'Alcohol Isopopílico', 
            'stock' => 10
        ]);
        Materiales::create([
            'nombre' => 'Pasta Térmica', 
            'stock' => 10
        ]);
    }
}
