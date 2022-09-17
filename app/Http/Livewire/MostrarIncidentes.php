<?php

namespace App\Http\Livewire;

use App\Models\Tipo;
use Livewire\Component;
use App\Models\Incidente;
use App\Models\Importancia;
use Livewire\WithPagination;

class MostrarIncidentes extends Component
{
    use WithPagination;
    protected $queryString = [
        'tipo',
        'gravedad',
        'estado',
    ];

    public $tipo;
    public $gravedad;
    public $estado;
    protected $listeners = ['eliminarIncidente', 'terminosBusqueda' => 'buscar'];

    public function buscar($tipo, $gravedad, $estado)
    {
        $this->tipo = $tipo;
        $this->gravedad = $gravedad;
        $this->estado = (int) $estado;
    }
    public function eliminarIncidente(Incidente $incidente)
    {
        $incidente->delete();
        // return redirect()->route('incidentes.show');
    }

    public function render()
    {
        $incidentes = Incidente::when($this->tipo, function ($query) {
            $query->where('tipo_id', $this->tipo);
        })->when($this->estado, function ($query) {
            $query->where('estado', $this->estado);
        })->when($this->gravedad, function ($query) {
            $query->where('importancia_id', $this->gravedad);
        })->paginate(5);

        return view('livewire.mostrar-incidentes', [
            'incidentes' => $incidentes
        ]);
    }
}
