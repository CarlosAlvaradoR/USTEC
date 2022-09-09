<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\Equipo;
use App\Models\Gravedad;
use App\Models\Importancia;
use App\Models\Incidente;
use Livewire\Component;

class CreateIncidenteHardware extends Component
{

    public $descripcion;
    // public $estado;
    public $area;
    public $gravedad;
    public $tipo;
    public $eq;
    public $titulo;
    public $equipo;

    protected $rules = [
        'descripcion' => 'required|string',
        'area' => 'required',
        'gravedad' => 'required',
        'titulo' => 'required|string'
    ];

    public function mount(Equipo $equipo)
    {
        $this->equipo = $equipo;
        $this->tipo = 1;
    }
    public function render()
    {
        $areas = Area::all();
        $gravedades = Importancia::all();
        return view('livewire.create-incidente-hardware', [
            'areas' => $areas,
            'gravedades' => $gravedades
        ]);
    }

    public function crearIncidente()
    {
        $datos = $this->validate();
        //s  dd($this->equipo->id . ' ' . $this->tipo);
        Incidente::create([

            'descripcion' => $datos['descripcion'],
            'titulo' => $datos['titulo'],
            'area_id' => $datos['area'],
            'importancia_id' => $datos['gravedad'],
            'tipo_id' =>  $this->tipo,
            'equipo_id' => $this->equipo->id,
            'user_id' => auth()->user()->id
        ]);


        //Crear un Mensaje
        session()->flash('mensaje-incidente', 'El incidente se guardo correctamente');

        //redireccionar al usuario
        return redirect()->route('incidentes.create', 'hardware');
    }
}
