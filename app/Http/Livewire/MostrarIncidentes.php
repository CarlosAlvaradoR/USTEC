<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Incidente;

class MostrarIncidentes extends Component
{
    protected $listeners = ['eliminarIncidente'];
    public function eliminarIncidente(Incidente $incidente)
    {
        $incidente->delete();
        return redirect()->route('incidentes.show');
    }
    public function render()
    {
        $incidentes = Incidente::latest()->paginate(2);
        return view('livewire.mostrar-incidentes', [
            'incidentes' => $incidentes
        ]);
    }
}
