<?php

namespace App\Http\Livewire;

use App\Mail\NotiEmail;
use App\Models\Area;
use App\Models\Equipo;
use Livewire\Component;
use App\Models\Gravedad;
use App\Models\Incidente;
use App\Models\Importancia;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class CreateIncidenteHardware extends Component
{

    public $descripcion;
    // public $estado;
    //  public $area;
    public $gravedad;
    public $tipo;
    public $eq;
    public $titulo;
    public $equipo;

    protected $rules = [
        'descripcion' => 'required|string',
        // 'area' => 'required',
        'gravedad' => 'required',
        'titulo' => 'required|string'
    ];

    public function mount(Equipo $equipo)
    {
        $this->equipo = $equipo;
        $this->tipo = 1;
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

    public function crearIncidente()
    {
        $datos = $this->validate();
        //s  dd($this->equipo->id . ' ' . $this->tipo);
        Incidente::create([
            'descripcion' => $datos['descripcion'],
            'titulo' => $datos['titulo'],
            'area_id' => $this->equipo->area_id,
            'importancia_id' => $datos['gravedad'],
            'tipo_id' =>  $this->tipo,
            'equipo_id' => $this->equipo->id,
            'user_id' => auth()->user()->id
        ]);

        //**Enviar notificacion al mail */
        $mailData = [
            "titulo" => $datos['titulo'],
            'descripcion' => $datos['descripcion'],
            'equipo' => $this->equipo->nombre_equipo,
            'importancia' => $datos['gravedad'],
            'area' => $this->equipo->area->area,
            'user' => auth()->user()->email
        ];
        $users = User::where('rol_id', 1)->orWhere('rol_id', 2)->get();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new NotiEmail($mailData));
        }
        //  Mail::to(auth()->user()->email)->send(new NotiEmail($mailData));

        if (auth()->user()->rol_id != '1' && auth()->user()->rol_id != '2') {
            $mensaje = 'Se acaba de notificar su incidente a los trabajadores. Por favor espere, solucionaremos el problema cuanto antes.';
            $this->reset(['titulo', 'descripcion','gravedad']);
            session()->flash('mensaje_hardware', $mensaje);
        } else {
            //Crear un Mensaje
            session()->flash('mensaje', 'El incidente se guardo correctamente');

            //redireccionar al usuario
            return redirect()->route('incidentes.show');
        }
        
        
    }
}
