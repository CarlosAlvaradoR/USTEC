<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class ShowUsers extends Component
{
    use WithPagination;
    
    public $search;

    public function render()
    {
        /*$posts = Post::where('title', 'like', '%'.$this->search.'%')
                ->orWhere('content', 'like', '%'.$this->search.'%')
                ->orderBy($this->sort, $this->direction)
                ->get();*/
        $users = User::where('name','like','%'.$this->search.'%')->paginate(5);
        return view('livewire.show-users', compact('users'))
        ->layout('layouts.app', ['header' => 'Lista de Usuarios']);
    }
}
