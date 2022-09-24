<?php

namespace App\Http\Controllers;

use App\Models\Uso;
use App\Models\Salida;
use App\Models\Incidente;
use App\Models\Materiales;
use Illuminate\Http\Request;
use App\Models\Material_Salida;

class SalidaController extends Controller
{
    public $cantidad;
    public $id;
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
        $array = $request->all();
        // dd($array);


        //  dd($array);
        Salida::create([
            'descripcion' => $request->descripcion,
            'incidente_id' => $request->incidente
        ]);
        $salida = Salida::latest('id')->first();
        foreach ($array as $key => $item) {
            $datos = explode("-", $key);

            if ($datos[0] === 'cantidad') {

                $this->cantidad = $item;
                $this->id = $datos[1];

                //**Descontar stock */
                $materiales = Materiales::find($this->id);
                $materiales->stock = $materiales->stock - $this->cantidad;
                $materiales->save();
                Uso::create([
                    'cantidad' =>     $this->cantidad,
                    'salida_id' => $salida->id,
                    'material_id' =>  $this->id

                ]);
            }
        };
        // foreach ($array as $key => $item) {
        $datos = explode("-", $key);
        //     Material_Salida::create([
        //         'cantidad' =>   $datos[1]
        //     ]);
        // }


        //actualizar estado de incidente
        Incidente::where('id', $request->incidente)->update(array('estado' => 1));
        session()->flash('mensaje', 'Solucion Guardada');

        return redirect()->route('show.incidente', $request->incidente);
    }
}
