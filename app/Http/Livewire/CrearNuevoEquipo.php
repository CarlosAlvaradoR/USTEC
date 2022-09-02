<?php

namespace App\Http\Livewire;

use App\Models\Equipo;
use Livewire\Component;

class CrearNuevoEquipo extends Component
{
    public $codigo;
    public $nombre_equipo;
    public $marca;
    public $descripcion;

    protected $rules = [
        'codigo' => 'required',
        'nombre_equipo' => 'required|string',
        'marca' => 'required|string',
        'descripcion' => 'required|string'

    ];

    public function crearEquipo()
    {
        $datos =  $this->validate();
        Equipo::create([
            'codigo' => $datos['codigo'],
            'nombre_equipo' => $datos['nombre_equipo'],
            'marca' => $datos['marca'],
            'descripcion' => $datos['descripcion']
        ]);
        $id = Equipo::latest('id')->first();

        //mensaje flash
        session()->flash('mensaje', 'Equipo Guargado');
        return redirect()->route('incidentes.create.hardware', $id);
    }


    public function render()
    {
        return view('livewire.crear-nuevo-equipo');
    }
}
