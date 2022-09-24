<?php

namespace App\Http\Livewire;

use App\Models\Materiales;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class CrearSolucion extends Component
{
    public $incidente;
    public $descripcion;
    public $search;


    public function render()
    {

        $materiales = Materiales::where('nombre', 'like', '%' . $this->search . '%')->get();

        return view('livewire.crear-solucion', [
            'materiales' => $materiales

        ]);
    }
}
