<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Dompdf\Dompdf;
use PDF;
use App\Models\Incidente;
use Illuminate\Http\Request;


class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.dashboard');
    }

    public function incidente(Incidente $incidente)
    {
        return view('incidentes.incidente', [
            'incidente' => $incidente
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        if ($request['tipo'] === 'software') {
            // !TODO
            $view = 'incidentes.create-software';
        } else {
            if ($request['tipo'] === 'hardware') {
                $view = 'incidentes.hardware';
            } else {
                if ($request['tipo'] === 'red') {
                    $view = 'incidentes.red';
                } else {
                    return redirect('/');
                }
            }
        }
        return view($view);
    }

    public function createHistorialPDF(Equipo $equipo)
    {

        $data = [

            'date' => date('d/m/Y'),
            'equipo' => $equipo
        ];

        $pdf = PDF::loadView('incidentes.historial-pdf', $data);
        return  $pdf->download('Historial.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {



        //->paginate(10);
        return view('incidentes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
