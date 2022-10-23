<?php

namespace App\Http\Livewire;

use App\Models\Tipo;
use Livewire\Component;
use App\Models\Importancia;

class FiltrarIncidentes extends Component
{
    public $tipo;
    public $gravedad;
    public $estado;

    public function leerDatosFormulario()
    {
        $this->emit('terminosBusqueda', $this->tipo, $this->gravedad, $this->estado);
    }
    public function render()
    {
        $tipos = Tipo::all();
        $gravedades = Importancia::all();
        return view('livewire.filtrar-incidentes', [
            'gravedades' => $gravedades,
            'tipos' => $tipos,
        ]);
    }
}
