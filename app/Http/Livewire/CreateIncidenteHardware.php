<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\Equipo;
use App\Models\Gravedad;
use App\Models\Importancia;
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
        $areas = Area::all();
        $gravedades = Importancia::all();
        return view('livewire.create-incidente-hardware', [
            'areas' => $areas,
            'gravedades' => $gravedades
        ]);
    }
}
