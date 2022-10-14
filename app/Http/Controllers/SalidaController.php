<?php

namespace App\Http\Controllers;

use App\Models\Uso;
use App\Models\Salida;
use App\Models\Incidente;
use App\Models\Materiales;
use Illuminate\Http\Request;
use App\Models\Material_Salida;
use Illuminate\Support\Facades\DB;

class SalidaController extends Controller
{
    public $cantidad;
    public $id;
    public function index(Incidente $incidente)
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
        //  dd($request);
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
            //cantidad-5  = 6
            //
            if ($datos[0] === 'cantidad') {

                $this->cantidad = $item;
                $this->id = $datos[1];

                //**Descontar stock */
                //!TODO Validar o verificar que exista el id del material */
                $materiales = Materiales::find($this->id);

                //!TODO Si existe el material, validar que el stock sea mayor que la cantidad a descontar
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
        // $datos = explode("-", $key);
        //     Material_Salida::create([
        //         'cantidad' =>   $datos[1]
        //     ]);
        // }


        /** Obtenemos el último id  */

        //actualizar estado de incidente
        Incidente::where('id', $request->incidente)->update(array('estado' => 1));
        session()->flash('mensaje', 'Solucion Guardada');

        return redirect()->route('show.incidente', $request->incidente);
    }
}
