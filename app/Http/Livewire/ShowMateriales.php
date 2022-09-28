<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Materiales;

class ShowMateriales extends Component
{
    use WithPagination;

    public $search;
    
    protected $listeners = ['render'];

    public function render()
    {
        $materiales = Materiales::where('nombre','like','%'.$this->search.'%')->paginate(4);
        return view('livewire.show-materiales', compact('materiales'))
        ->layout('layouts.app', ['header' => 'Lista de Materiales']);
    }
}
