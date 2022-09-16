<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIIncidentes extends Controller
{
        //

        public function index()
        {
                //** Consultas para graficos */
                $datos = [];
                //** incidencias por area*/
                $sql = "SELECT a.area , COUNT(`area_id`) AS `total` FROM `incidentes`  i
                inner join areas a on a.id = i.area_id
                GROUP BY `area_id`;";
                $areas =  DB::select($sql);

                //** numero de incidencias por gravedad */
                $sql = "SELECT im.importancia , COUNT(`importancia_id`) AS `total` FROM `incidentes`  i
                inner join importancias im on im.id = i.importancia_id
                GROUP BY `importancia_id`;";
                $gravedades =  DB::select($sql);


                //** Incidencias por tipo en meses */
                $sql = "SELECT tipo_id as tipo ,COUNT('tipo_id') AS total, 
                        MONTH(created_at) AS mes
                        FROM incidentes  WHERE YEAR(created_at) = YEAR(CURDATE()) AND tipo_id = 1
                        GROUP BY  MONTH(created_at), tipo_id
                        ORDER BY  MONTH(created_at) ASC ;";

                $tipoUno = DB::select($sql);

                $sql = "SELECT tipo_id as tipo ,COUNT('tipo_id') AS total, 
                MONTH(created_at) AS mes
                FROM incidentes  WHERE YEAR(created_at) = YEAR(CURDATE()) AND tipo_id = 2
                GROUP BY  MONTH(created_at), tipo_id
                ORDER BY  MONTH(created_at) ASC ;";

                $tipoDos = DB::select($sql);

                $sql = "SELECT e.nombre_equipo `equipo`, COUNT(`equipo_id`) AS `total` FROM `incidentes` i
                inner join equipos e on e.id = i.equipo_id
                GROUP BY `equipo` ORDER BY `total` DESC LIMIT 5;";

                $topEquipos = DB::select($sql);


                $datos['areas'] = $areas;
                $datos['gravedades'] = $gravedades;
                $datos['tipoUno'] = $tipoUno;
                $datos['tipoDos'] = $tipoDos;
                $datos['topEquipos'] = $topEquipos;

                echo json_encode($datos);
        }
}
