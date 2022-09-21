<?php

namespace App\Http\Livewire;

use App\Models\Area;
use Livewire\Component;
use App\Models\Incidente;
use App\Models\Importancia;

class CreateIncidenteSoftware extends Component
{
    public $descripcion;
    public $gravedad;
    public $titulo;
    public $area;
    public $tipo;

    protected $rules = [
        'descripcion' => 'required|string',
        'area' => 'required',
        'gravedad' => 'required',
        'titulo' => 'required|string'
    ];
    public function mount()
    {
        //  $this->equipo = $equipo;
        $this->tipo = 2;
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
            // 'equipo_id' => $this->equipo->id,
            'user_id' => auth()->user()->id
        ]);


        //Crear un Mensaje
        session()->flash('mensaje-incidente', 'El incidente software se guardo correctamente');

        //redireccionar al usuario
        return redirect()->route('incidentes.create', 'software');
    }




    public function render()
    {
        $gravedades = Importancia::all();
        $areas = Area::all();
        return view('livewire.create-incidente-software', [
            'areas' => $areas,
            'gravedades' => $gravedades
        ]);
    }
}
