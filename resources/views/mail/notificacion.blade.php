<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1 class="text-2xl text-blue-700 font-bold">Nuevo incidente en:{{ $mailData['equipo'] }} - {{$mailData['area']}}
    </h1>
    <h2 class="text-xl text-gray-800">{{ $mailData['titulo'] }}</h2>
    <p class=" text-gray-500">Descripcion: {{ $mailData['descripcion'] }}</p>
    <a href="{{route('incidentes.show')}}" class="font-medium text-black-600 dark:text-black-900 hover:underline">Ver
        Incidentes</a>
    <p class="text-gray-400">Este incidente fue reportado por: <span class="text-gray-800">{{$mailData['user']}}</span>
    </p>
    {{-- <p class=" text-gray-500">Gravedad: {{ $mailData['descripcion'] }}</p> --}}
</body>

</html>