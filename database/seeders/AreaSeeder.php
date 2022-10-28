<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //LOS DE MORADO
        DB::table('areas')->insert([
            'area' => 'DEFENSORÍA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'TRIBUNAL DE HONOR',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'COMITE DEL SISTEMA DE
            CONTROL INTERNO',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'COMISIÓN ESPECIAL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'COMITÉ ELECTORAL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'COMISIÓN PERMANENTE
            DE FISCALIZACIÓN',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'FUNDASAM',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);



        // LOS AZULES
        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE CONTROL INSTITUCIONAL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'PROCURADURÍA
            UNIVERSITARIA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'SECRETARÌA GENERAL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE
            IMÁGEN INSTITUCIONAL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE
            PLANIFICACIÓN Y
            PRESUPUESTO
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE
            ASESORÍA JURÍDICA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('areas')->insert([
            'area' => 'DIRECCIÓN DE ABASTECIM. Y
            SERViCIOS. AUXILIARES',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'DIRECCIÓN DE RECURSOS
            HUMANOS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'DIRECCIÓN DE GESTIÓN
            AMB. Y BIOSEGURIDAD',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'DIRECCIÓN DE GESTIÓN
            FINANCIERA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'DIRECCIÓN DE BIENESTAR
            UNIVERSITARIO',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE PRE INVERSIÓN.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE
            RESPONSABILIDAD SOCIAL
            UNIVERSITARIA
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE
            DESARROLLO FÍSICO',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE
            TECNOLOGÍAS DE INFORM.
            SISTEMAS Y ESTADÍSTICA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'CENTROS DE PRODUCCIÓN
            DE BIENES Y SERVICIOS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('areas')->insert([
            'area' => 'DIRECCIÓN DE DERECHOS
            DE AUTOR Y PATENTES',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'DIRECCIÓN DEL INSTITUTO
            DE INVESTIGACION
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'DIRECCIÓN DE
            INCUBADORAS DE EMPRESAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'DIRECCIÓN DE
            REPOSITORIO
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('areas')->insert([
            'area' => 'DIRECCIÓN GENERAL DE
            INSTITUTOS DE INVESTIG.
            Y EXPERIMENTACIÓN',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('areas')->insert([
            'area' => 'DIRECCIÓN ACADÉMICA DE ESTUDIOS GENERALES',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE
            ESTUDIOS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE
            ADMISIÓN',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE
            CALIDAD
            UNIVERSITARIA',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'OFICINA GENERAL DE
            SERVICIOS ACADÉMICOS
            Y PUBLICACIONES
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('areas')->insert([
            'area' => 'ESCUELA DE POST GRADO',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);



        DB::table('areas')->insert([
            'area' => 'FACULTAD DE CIENCIAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'FACULTAD DE
            CIENCIAS MÉDICAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'FACULTAD DE
            CIENCIAS
            AGRARIAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'FACULTAD DE
            DERECHO Y
            CIENCIAS
            POLITICAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'FACULTAD DE
            ECONOMÍA Y
            CONTABILIDAD',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'FACULTAD DE
            ADMINISTRACIÓN Y
            TURISMO',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'FACULTAD DE
            CIENCIAS
            SOCIALES Y
            EDUCACIÓN
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'FACULTAD DE
            INGENIERÍA DE MINAS,
            GEOLOGÍA Y
            METALURGIA
            ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'FACULTAD DE
            INGENIERÍA DE
            INDUSTRIAS
            ALMENTARIAS',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'FACULTAD DE
            CIENCIAS DEL
            AMBIENTE',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => 'FACULTAD DE
            INGENIERÍA CIVIL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        /*
        DB::table('areas')->insert([
            'area' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('areas')->insert([
            'area' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);*/
    }
}
