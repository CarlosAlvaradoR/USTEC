<?php

namespace App\Http\Livewire;

use App\Models\Equipo;
use App\Models\Incidente;
use Livewire\Component;


class HistorialIncidencias extends Component
{
    public $codigo;
    public $equipo;


    protected $listeners = ['terminosBusqueda' => 'buscar'];

    public function buscar($codigo)
    {
        $this->codigo = $codigo;
        $this->equipo = Equipo::where('codigo',  $this->codigo)->first();
        if (!isset($this->equipo)) {
            session()->flash('mensaje', 'Equipo no encontrado');
        }
    }
    public function render()
    {
        // if (isset($this->equipo)) {
        //     $incidentes = Incidente::where('equipo_id', $this->equipo->id)->paginate(2);
        //     // dd($incidentes);
        // } else {
        //     $incidentes = [];
        // }
        return view('livewire.historial-incidencias', [
            'equipo' => $this->equipo
        ]);
    }
}
