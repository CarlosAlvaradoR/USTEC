<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BuscarEquipo extends Component
{
    public $codigo;
    protected $rules = [
        'codigo' => 'required'
    ];
    public function leerDatosFormulario()
    {
        $this->validate();
        $this->emit('terminosBusqueda', $this->codigo);
    }
    public function render()
    {

        return view('livewire.buscar-equipo');
    }
}
