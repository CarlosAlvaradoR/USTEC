<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipo;
use Faker\Factory as Faker;
use App\Models\Incidente;
class EquiposIncidentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();
       
       
            
            Equipo::create([

                'codigo'=>'0001',
                'nombre_equipo'=>'Computadora Samsumg', 
                'marca'=>'Samsumg', 
                'descripcion'=>'Windows 10, Pantalla LCD 14°',
                'area_id'=>'1',
            
            ]);
           
            Equipo::create([

                'codigo'=>'0002',
                'nombre_equipo'=>'Impresora multifuncional', 
                'marca'=>'Epson', 
                'descripcion'=>'IMPRESORA EPSON ECOTANK L1210 220VA',
                'area_id'=>'1',
            
            ]);
            Equipo::create([

                'codigo'=>'0003',
                'nombre_equipo'=>'LAPTOP ASUS', 
                'marca'=>'ASUS', 
                'descripcion'=>'LAPTOP ASUS UM325UA-KG150W AMD RYZEN 7-5700U 16GB 512GB SSD 13.3 OLED FHD WINDOWS 11°',
                'area_id'=>'2',
            
            ]);   
            Equipo::create([

                'codigo'=>'0004',
                'nombre_equipo'=>'PROYECTOR', 
                'marca'=>'VIEWSONIC', 
                'descripcion'=>'PROYECTOR VIEWSONIC PA503X 3600L XGA 1024 x 768',
                'area_id'=>'3',
            
            ]);

            Equipo::create([

                'codigo'=>'0005',
                'nombre_equipo'=>'PC Hogar&Oficina', 
                'marca'=>'Intel', 
                'descripcion'=>'COMPUTADORA OFFITEC INTEL PENTIUM GOLD G6400 8GB 1TB + 240GB SSD 18.5" HD',
                'area_id'=>'4',
            
            ]);

        Incidente::create([
           
            'created_at'=>'2022-06-22 15:12:21',
            'updated_at'=>'2022-06-22 15:20:00',
            'descripcion'=>'El equipo se encuentra malogrado',
            'estado'=> '1',
            'area_id'=> '1',
            'importancia_id'=> rand(1,3), 
            'tipo_id'=> rand(1,3),
             'equipo_id'=> '1',
             'user_id'=>'1',
             'titulo'=>'Reparación de Computadora Samsumg',
        ]); 
        Incidente::create([
           
            'created_at'=>'2022-06-26 09:12:21',
            'updated_at'=>'2022-06-26 09:20:00',
            'descripcion'=>'Se atascó el papel',
            'estado'=> '1',
            'area_id'=>'1',
            'importancia_id'=> rand(1,3), 
            'tipo_id'=> rand(1,3),
             'equipo_id'=> '2',
             'user_id'=>'1',
             'titulo'=>'Reparación de Impresora multifuncional',
        ]); 
        Incidente::create([
           
            'created_at'=>'2022-07-16 09:12:21',
            'updated_at'=>'2022-07-16 09:20:00',
            'descripcion'=>'Se atascó el papel y no apaga',
            'estado'=> '1',
            'area_id'=>'1',
            'importancia_id'=> rand(1,3), 
            'tipo_id'=> rand(1,3),
             'equipo_id'=> '2',
             'user_id'=>'1',
             'titulo'=>'Reparación de Impresora multifuncional',
        ]); 
        Incidente::create([
           
            'created_at'=>'2022-07-12 09:12:21',
            'updated_at'=>'2022-07-12 09:20:00',
            'descripcion'=>'no prende la impresora',
            'estado'=> '1',
            'area_id'=>'1',
            'importancia_id'=> rand(1,3), 
            'tipo_id'=> rand(1,3),
             'equipo_id'=> '2',
             'user_id'=>'1',
             'titulo'=>'Reparación de Impresora multifuncional',
        ]); 

        Incidente::create([
           
            'created_at'=>'2022-07-08 10:25:02',
            'updated_at'=>'2022-07-08  10:30:00',
            'descripcion'=>'El equipo presenta fallas en la pantalla al momento de enceder',
            'estado'=> '2',
            'area_id'=> '2',
            'importancia_id'=> rand(1,3), 
            'tipo_id'=> rand(1,3),
             'equipo_id'=> '3',
             'user_id'=>'1',
             'titulo'=>'Reparación de LAPTOP ASUS',
        ]); 

        Incidente::create([
           
            'created_at'=>'2022-08-08 10:25:02',
            'updated_at'=>'2022-08-08  10:30:00',
            'descripcion'=>'El equipo presenta fallas en la pantalla',
            'estado'=> '1',
            'area_id'=> '2',
            'importancia_id'=> rand(1,3), 
            'tipo_id'=> rand(1,3),
             'equipo_id'=> '3',
             'user_id'=>'1',
             'titulo'=>'Reparación de LAPTOP ASUS',
        ]); 
        Incidente::create([
           
            'created_at'=>'2022-09-12 14:12:01',
            'updated_at'=>'2022-09-12 14:15:10',
            'descripcion'=>'No enciende el proyector correctamente',
            'estado'=> '1',
            'area_id'=> '3',
            'importancia_id'=> rand(1,3), 
            'tipo_id'=> rand(1,3),
             'equipo_id'=> '4',
             'user_id'=>'1',
             'titulo'=>'Reparación del problema de encendido del PROYECTOR n014',
        ]); 
        Incidente::create([
           
            'created_at'=>'2022-10-12 15:01:20',
            'updated_at'=>'2022-16-21 15:06:00',
            'descripcion'=>'No funciona el teclado de la computadora',
            'estado'=> '1',
            'area_id'=> '4',
            'importancia_id'=> rand(1,3), 
            'tipo_id'=> rand(1,3),
             'equipo_id'=> '5',
             'user_id'=>'1',
             'titulo'=>'Reparación del teclado de la COMPUTADORA OFFITEC INTEL',
        ]); 
}
}
