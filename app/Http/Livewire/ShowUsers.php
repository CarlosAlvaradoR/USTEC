<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class ShowUsers extends Component
{
    use WithPagination;
    
    public $search;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        $users = User::select('users.id', 'users.name','users.email', 'roles.nombre','users.status')
                ->join('roles', 'users.rol_id', '=', 'roles.id')
                ->where('users.name','like','%'.$this->search.'%')
                ->orWhere('users.email', 'like', '%'.$this->search.'%')
                ->orWhere('roles.nombre', 'like', '%'.$this->search.'%')
                ->orderBy('users.id', 'ASC')
                ->paginate(5);
                
        return view('livewire.show-users', compact('users'))
        ->layout('layouts.app', ['header' => 'Lista de Usuarios']);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
