<?php

namespace App\Http\Controllers;

use App\Models\Incidente;
use App\Models\Salida;
use Illuminate\Http\Request;

class SalidaController extends Controller
{
    public function index(Incidente $incidente)
    {
        return view('salidas.index', [
            'incidente' => $incidente
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

        //actualizar estado de incidente
        Incidente::where('id', $request->incidente)->update(array('estado' => 1));
        session()->flash('mensaje-incidente', 'Solucion Guardada');

        return redirect()->route('incidentes.create', 'hardware');
    }
}
