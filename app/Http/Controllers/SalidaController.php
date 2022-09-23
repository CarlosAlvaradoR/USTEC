<?php

namespace App\Http\Controllers;

use App\Models\Incidente;
use App\Models\Salida;
use App\Models\Materiales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalidaController extends Controller
{
    public function index(Incidente $incidente) //Id del Problema u incidente
    {
        //return $incidente;
        //Primero hacemos un select
        //Si hay datos en el select count un return sino otro return
        $materiales = Materiales::all(); 
        return view('salidas.index', [
            'incidente' => $incidente,
            'materiales' => $materiales
        ]);
    }


    public function store(Request $request)
    { // !TODO validar
        //dd($request->incidente);
        //almacenar Salida o solucion
        Salida::create([
            'descripcion' => $request->descripcion,
            'incidente_id' => $request->incidente
        ]);

        /** Obtenemos el último id  */
        $ultimoIdSalida = DB::select('SELECT s.id FROM salidas s order by id desc limit 1');
        //actualizar estado de incidente
        Incidente::where('id', $request->incidente)->update(array('estado' => 1));
        /*session()->flash('mensaje-incidente', 'Solucion Guardada');*/

        //return $ultimoIdSalida[0]->id;
        return redirect()->route('salida.materiales.index', [$ultimoIdSalida[0]->id]);
    }
}
