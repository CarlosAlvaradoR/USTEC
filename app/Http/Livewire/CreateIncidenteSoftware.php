<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Area;
use App\Models\User;
use App\Mail\NotiEmail;
use Livewire\Component;
use App\Models\Incidente;
use App\Models\Importancia;
use Illuminate\Support\Facades\Mail;

class CreateIncidenteSoftware extends Component
{
    public $descripcion;
    public $gravedad;
    public $titulo;
    public $area;
    public $tipo;

    protected $rules = [
        'descripcion' => 'required|string',
        'area' => 'required',
        'gravedad' => 'required',
        'titulo' => 'required|string'
    ];
    public function mount()
    {
        //  $this->equipo = $equipo;
        $this->tipo = 2;
    }
    public function crearIncidente()
    {
        //dd(Auth::user()->rol_id);
        //return;
        $datos = $this->validate();
        //s  dd($this->equipo->id . ' ' . $this->tipo);
        Incidente::create([

            'descripcion' => $datos['descripcion'],
            'titulo' => $datos['titulo'],

            'area_id' => $datos['area'],
            'importancia_id' => $datos['gravedad'],
            'tipo_id' =>  $this->tipo,
            // 'equipo_id' => $this->equipo->id,
            'user_id' => auth()->user()->id
        ]);
        //**Enviar notificacion al mail */
        $area = Area::find($datos['area']);
        $mailData = [
            "titulo" => $datos['titulo'],
            'descripcion' => $datos['descripcion'],
            'equipo' => 'Sin equipo',
            'importancia' => $datos['gravedad'],
            'area' => $area->area,
            'user' => auth()->user()->email
        ];
        $users = User::where('rol_id', 1)->orWhere('rol_id', 2)->get();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new NotiEmail($mailData));
        }

        if (auth()->user()->rol_id == '1' || auth()->user()->rol_id == '2') {
            //dd('Trabajador');
            //redireccionar al usuario
            $mensaje = 'El incidente se guardo correctamente';
            session()->flash('mensaje', $mensaje);
            return redirect()->route('incidentes.show');
            
        } else {
            //dd('Notificador');
            $mensaje = 'Se acaba de notificar su incidente a los trabajadores. Por favor espere, solucionaremos el problema cuanto antes.';
            $this->reset(['titulo', 'descripcion','gravedad','area']);
            session()->flash('mensaje_software', $mensaje);
        }
        
        /*
        //Crear un Mensaje
        session()->flash('mensaje', 'El incidente  se guardo correctamente');

        //redireccionar al usuario
        return redirect()->route('incidentes.show');*/
    }




    public function render()
    {
        $gravedades = Importancia::all();
        $areas = Area::all();
        return view('livewire.create-incidente-software', [
            'areas' => $areas,
            'gravedades' => $gravedades
        ]);
    }
}
