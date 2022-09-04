<div>
    <livewire:buscar-equipo />
    @if (session()->has('mensaje'))
    <p class="text-red-600">{{session('mensaje')}}</p>
    @endif
    <div class="mt-5">
        @forelse ($equipos as $equipo)
        <div class="bg-gray-200 border rounded-lg p-4  flex justify-between">
            <div>
                <h2 class="font-bold text-xl">Equipo: <span class="font-normal">{{$equipo->nombre_equipo . ' ' .
                        $equipo->marca}}</span></h2>
                <p class="text-gray-500 text-sm">{{$equipo->descripcion}}</p>
            </div>
            <div>
                <a class="bg-blue-800 hover:bg-blue-900 transition-colors text-white text-sm  px-5 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                    href="{{route('equipo.create.incidentes',$equipo)}}">+ Nuevo Incidente</a>
            </div>
        </div>

        <div class="bg-gray-100 border rounded-lg p-4 mt-2 ">
            <h2 class="font-bold text-xl">Historial</h2>
        </div>

        @empty
        <p class="text-gray-500 mt-4">¿No encuentras el equipo?
            <a href="{{route('create.equipo')}}" class="text-blue-600 cursor-pointer underline">Crea uno
                nuevo aqui</a>
        </p>
        @endforelse
    </div>
</div>