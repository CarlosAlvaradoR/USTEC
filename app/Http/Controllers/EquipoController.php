<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Mostrar los equipos registrados en la base de datos
    {
        //
        
        $equipos=Equipo::orderBy('id','DESC')->paginate(5);
        //return $equipos;
        return view('equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipos.create-equipo');
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
    public function show($id)
    {
        //
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
        $equipo=Equipo::findOrFail($id);
        return view('equipos.edit', compact('equipo'));
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
        $this->validate($request,[
            'codigo'=>'required|min:1',
            'nombre_equipo'=>'required|min:3',
            'marca'=>'required|min:2',
            'descripcion'=>'required'
        ]);
        
        $equipo= Equipo::find($id);
        $equipo->codigo=$request->codigo;
        $equipo->nombre_equipo=$request->nombre_equipo;
        $equipo->marca=$request->marca;
        $equipo->descripcion=$request->descripcion;

        $equipo->save();
        $notification='Equipo Actualizado correctamente';
        return redirect()->route('index.equipos')->with(compact('notification'));
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
        $equipo = Equipo::findOrFail($id);
        $equipoName = $equipo->nombre_equipo; //Obtiene el nombre del material
        $equipo->delete();
        $notification = "El equipo $equipoName se eliminó corectamente";
        //return "Eliminado";
        return redirect()->route("index.equipos")->with(compact('notification'));
    }
}
