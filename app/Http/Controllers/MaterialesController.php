<?php

namespace App\Http\Controllers;

use App\Models\Materiales;
use Illuminate\Http\Request;

class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materiales = Materiales::all();
        return view('materiales.index', compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('materiales.create');
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
        $this->validate($request,[
            'nombre'=>'required|min:3',
            'stock'=>'required|numeric'
        ]);

        $materiales = Materiales::create([
            'nombre'=>$request->nombre, 
            'stock'=>$request->stock
        ]);
        return redirect()->route('materiales.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function show(Materiales $materiales)
    {
        //
    }

    public function edit($id)
    {
        $material=Materiales::findOrFail($id);
        return view('materiales.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'nombre'=>'required|min:3',
            'stock'=>'required|numeric'
        ]);
        
        $materiales= Materiales::find($id);
        $materiales->nombre=$request->nombre;
        $materiales->stock=$request->stock;

        $materiales->save();
        $notification='Actualizado correctamente';
        return redirect()->route('index.materiales')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materiales $materiales)
    {
        //
    }
}
