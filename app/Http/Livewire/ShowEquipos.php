<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Equipo;

class ShowEquipos extends Component
{
    use WithPagination;
    
    public $search;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        $equipos = Equipo::where('codigo','like','%'.$this->search.'%')
        ->orWhere('nombre_equipo', 'like', '%'.$this->search.'%')
        ->orWhere('marca', 'like', '%'.$this->search.'%')
        ->orWhere('descripcion', 'like', '%'.$this->search.'%')
        ->orderBy('id', 'desc')
        ->paginate(5);

        return view('livewire.show-equipos', compact('equipos'))
        ->layout('layouts.app', ['header' => 'Lista de Equipos']);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
