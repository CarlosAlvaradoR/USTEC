<?php

namespace App\Http\Controllers;

use App\Models\SalidaMateriales;
use App\Models\Materiales;
use Illuminate\Http\Request;

class SalidaMaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$id2)
    {
        //
        $materiales = Materiales::all();
        return view('salidas_materiales.index', compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $salida=SalidaMateriales::all();
        return $salida;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalidaMateriales  $salidaMateriales
     * @return \Illuminate\Http\Response
     */
    public function show(SalidaMateriales $salidaMateriales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalidaMateriales  $salidaMateriales
     * @return \Illuminate\Http\Response
     */
    public function edit(SalidaMateriales $salidaMateriales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalidaMateriales  $salidaMateriales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalidaMateriales $salidaMateriales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalidaMateriales  $salidaMateriales
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalidaMateriales $salidaMateriales)
    {
        //
    }
}
