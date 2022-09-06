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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function edit(Materiales $materiales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materiales $materiales)
    {
        //
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
