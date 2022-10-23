<!DOCTYPE html>
<html>

<head>
    <title>Historial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>

</style>

<body>

    <head>

        <div>
            <p class="font-weight-bold text-right">OGTISE - UNIDAD DE SOPORTE TECNICO</p>
        </div>
        <div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h6 class="font-weight-bold  text-uppercase">Historial del Equipo: <small>{{
                            $equipo->nombre_equipo
                            }}</small></h6>
                </li>
                <li class="list-group-item">
                    <h6 class="font-weight-bold text-uppercase">Código Patrimonial: <small>{{$equipo->codigo}}</small>
                    </h6>
                </li>
                <li class="list-group-item">
                    <h6 class="font-weight-bold text-uppercase">Descripcion: <small>{{$equipo->descripcion}}</small>
                    </h6>
                </li>

                <li class="list-group-item">
                    <h6 class="font-weight-bold text-uppercase">Ubicación: <small>{{$equipo->area->area}}</small>
                    </h6>
                </li>

            </ul>
        </div>

    </head>
    <hr>
    <div class="">
        <p class="small text-uppercase font-bold">Total Incidentes: {{$equipo->incidentes->count()}}
        </p>
    </div>
    <div>
        <table class="table table-sm ">
            <tr>
                <th>N°</th>
                <th>Fecha de incidente</th>
                <th>Título</th>
                <th>Descripcion</th>
                <th>Solución</th>

            </tr>
            @foreach ($equipo->incidentes as $incidente)

            <tr>
                <td class="small">{{$incidente->id}}</td>
                <td class="small">
                    {{$incidente->created_at->format('d-m-Y')}}
                </td>
                <td class="small">{{ $incidente->titulo }}</td>
                <td class="small">{{ $incidente->descripcion }}.
                    <p>Gravedad: {{$incidente->importancia->importancia}}</p>
                </td>

                <td class="small">
                    @forelse ($incidente->solucion as $solucion)
                    <p>{{$solucion->descripcion}}</p>

                    @empty
                    <p>Este incidente no tiene solucion</p>
                    @endforelse
                </td class="small">
            </tr>



            @endforeach
        </table>

    </div>

    <hr>
    <div>
        <p class="text-right">Fecha de impresión: {{ $date }}</p>
    </div>
</body>

</html>