<?php

namespace App\Http\Controllers;

use App\Models\Area;
use PDF;
use Dompdf\Dompdf;
use App\Models\Equipo;
use App\Models\Incidente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //** Total tipo uno y dos */
        $totalTipoUno = Incidente::where('tipo_id', 1)->count();
        $totalTipoDos = Incidente::where('tipo_id', 2)->count();
        //Area con mas interveciones Software y el total de intervenciones
        $sql = "area_id, COUNT(area_id) as area ";
        // $areaMay =  DB::select($sql);
        $areaMayorSoft = DB::table('incidentes')->join('areas', 'areas.id', '=', 'incidentes.area_id')->select('areas.area', DB::raw('count(*) as total'))->where('tipo_id', '=', 1)->groupBy('area_id')->orderByDesc("total")->first();

        // dd($areaMayor->total);
        // $areaMayorS = Area::find($areaMay[0]->area_id);
        // $cantidadAreaS = $areaMay[0]->area;


        //**Area con mas interveciones Hard y el total de intervenciones

        $areaMayorHard = DB::table('incidentes')->join('areas', 'areas.id', '=', 'incidentes.area_id')->select('areas.area', DB::raw('count(*) as total'))->where('tipo_id', '=', 2)->groupBy('area_id')->orderByDesc("total")->first();

        //Equipo con mas incidentes mas area
        $equipoMayor = DB::table('incidentes')->join('equipos', 'equipos.id', '=', 'incidentes.equipo_id')->select('equipos.nombre_equipo', DB::raw('count(*) as total'))->groupBy('equipo_id')->orderByDesc("total")->first();
        // dd($equipoMayor);
        // $sq = "SELECT `equipo_id`, COUNT(`equipo_id`) AS `equipo` FROM `incidentes` GROUP BY `equipo_id` ORDER BY `equipo` DESC LIMIT 1";
        // $equipoMay =  DB::select($sq);
        // $equipoMayor = Equipo::find($equipoMay[0]->equipo_id);
        // $cantidadEq = $equipoMay[0]->equipo;

        $incidentes = Incidente::all();
        return view('home.dashboard', [
            'incidentes' => $incidentes,
            'areaMayorSoft' => $areaMayorSoft,
            'areaMayorHard' => $areaMayorHard,

            'equipoMayor' => $equipoMayor,

            'totalTipoUno' => $totalTipoUno,
            'totalTipoDos' => $totalTipoDos
        ]);
    }

    public function incidente(Incidente $incidente)
    {
        return view('incidentes.incidente', [
            'incidente' => $incidente
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        if ($request['tipo'] === 'software') {
            // !TODO
            $view = 'incidentes.create-software';
        } else {
            if ($request['tipo'] === 'hardware') {
                $view = 'incidentes.hardware';
            } else {
                if ($request['tipo'] === 'red') {
                    $view = 'incidentes.red';
                } else {
                    return redirect('/');
                }
            }
        }
        return view($view);
    }

    public function createHistorialPDF(Equipo $equipo)
    {

        $data = [

            'date' => date('d/m/Y'),
            'equipo' => $equipo
        ];

        $pdf = PDF::loadView('incidentes.historial-pdf', $data);
        return  $pdf->download('Historial.pdf');
    }

    public function editIncidente(Incidente $incidente, Request $request)
    {
        if ($request['tipo'] === 'software') {
            // !TODO
            $view = 'incidentes.editar-incidente';
        } else {
            if ($request['tipo'] === 'hardware') {
                $view = 'incidentes.editar-incidente-equipo';
            }
        }
        return view($view, [
            "incidente" => $incidente
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {



        //->paginate(10);
        return view('incidentes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
