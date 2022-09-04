<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class HardwareController extends Controller
{
    public function create(Request $request)
    {

        $equipo = Equipo::find($request->equipo);

        return view('incidentes.create-hardware', [
            'equipo' => $equipo
        ]);
    }


    public function createIncidente(Equipo $equipo)
    {
        //dd($equipo);
        return view('incidentes.incidente-hardware', [
            "equipo" => $equipo
        ]);
    }
}
