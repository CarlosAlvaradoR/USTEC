<?php

namespace App\Http\Livewire;

use App\Models\Equipo;
use Livewire\Component;

class HistorialIncidencias extends Component
{
    public $codigo;
    public $equipo = [];
    protected $listeners = ['terminosBusqueda' => 'buscar'];

    public function buscar($codigo)
    {
        $this->codigo = $codigo;
        $this->equipo = Equipo::where('codigo',  $this->codigo)->get();
        if (count($this->equipo) == 0) {
            session()->flash('mensaje', 'Equipo no encontrado');
        }
    }
    public function render()
    {

        return view('livewire.historial-incidencias', [
            'equipos' => $this->equipo
        ]);
    }
}
