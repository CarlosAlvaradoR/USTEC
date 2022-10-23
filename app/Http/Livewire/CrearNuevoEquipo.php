<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\Equipo;
use Livewire\Component;

class CrearNuevoEquipo extends Component
{
    public $codigo;
    public $nombre_equipo;
    public $marca;
    public $descripcion;
    public $area;

    protected $rules = [
        'codigo' => 'required|unique:equipos',
        'nombre_equipo' => 'required|string',
        'marca' => 'required|string',
        'descripcion' => 'required|string',
        'area' => 'required'

    ];

    public function crearEquipo()
    {
        $datos =  $this->validate();
        Equipo::create([
            'codigo' => $datos['codigo'],
            'nombre_equipo' => $datos['nombre_equipo'],
            'marca' => $datos['marca'],
            'descripcion' => $datos['descripcion'],
            'area_id' => $datos['area']
        ]);
        $equipo = Equipo::latest('id')->first();


        //mensaje flash
        session()->flash('mensaje', 'Equipo guardado correctamente');

        return redirect()->route('equipo.create.incidentes', $equipo);
    }


    public function render()
    {
        $areas = Area::all();
        return view('livewire.crear-nuevo-equipo', [
            'areas' => $areas
        ]);
    }
}
