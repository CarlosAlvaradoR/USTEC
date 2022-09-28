<?php

namespace App\Http\Livewire;

use App\Models\Materiales;
use Livewire\Component;

class CreateMaterial extends Component
{
    public $nombre,$stock,$hola="Hola programador";
    public $booleano;

    public function save(){
        
        Materiales::create([
            'nombre' => $this->nombre,
            'stock' => $this->stock
        ]);
        $this->booleano=true;
        $this->reset(['nombre','stock']);
        //Emitimos un evento con el nombre de render
        //$this->emit('render');/** Este va a renderizar todos los render que hay */
        $this->emitTo('show-materiales','render'); /***Emite a un componente en específico */
        $this->emit('alert', 'El Post se creó satisfactoriamente'); //Para escuchar en vista
    }

    public function render()
    {
        return view('livewire.create-material');
    }
}
