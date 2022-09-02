<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CrearNuevoEquipo extends Component
{
    public $codigo;


    public function render()
    {
        return view('livewire.crear-nuevo-equipo');
    }
}
