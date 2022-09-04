<?php

namespace App\Http\Livewire;

use App\Models\Equipo;
use Livewire\Component;

class CreateIncidenteHardware extends Component
{
    public $equipo;
    public function mount(Equipo $equipo)
    {
        $this->equipo = $equipo;
    }
    public function render()
    {
        return view('livewire.create-incidente-hardware');
    }
}
