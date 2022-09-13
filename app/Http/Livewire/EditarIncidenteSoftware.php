<?php

namespace App\Http\Livewire;

use App\Models\Incidente;
use App\Models\Importancia;
use App\Models\Area;
use Livewire\Component;


class EditarIncidenteSoftware extends Component
{
    public $incidente;
    public $incidente_id;
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
    public function mount(Incidente $incidente)
    {

        $this->incidente_id = $incidente->id;
        $this->titulo = $incidente->titulo;
        $this->descripcion = $incidente->descripcion;
        $this->gravedad = $incidente->importancia_id;
        $this->area = $incidente->area_id;
    }
    public function editarIncidente()
    {
        $datos = $this->validate();
        $incidente = Incidente::find($this->incidente_id);
        $incidente->titulo = $datos['titulo'];
        $incidente->descripcion = $datos['descripcion'];
        $incidente->importancia_id = $datos['gravedad'];
        $incidente->area_id = $datos['area'];

        $incidente->save();
        session()->flash('mensaje', 'El incidente se actualizó correctamente');
        return redirect()->route('incidentes.show');
    }
    public function render()
    {
        $gravedades = Importancia::all();
        $areas = Area::all();
        return view('livewire.editar-incidente-software', [
            'areas' => $areas,
            'gravedades' => $gravedades
        ]);
    }
}
