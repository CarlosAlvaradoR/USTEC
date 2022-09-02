<div>
    <div class="flex justify-between">
        <p>Historial de Problemas</p>
        <x-button class=" h-10 justify-center ">
            {{ __('Registrar Incidente') }}
        </x-button>
    </div>
    <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
        <div class="space-y-3">
            <a href="#" class="text-xl font-bold">
                Error con Energía
            </a>
            <p class="text-sm text-gray-600 font-bold">
                Se malogro el conector
            </p>
            <p class="text-sm text-gray-500">Ocurrido: Hace 2 meses</p>

        </div>

        <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
            <a href="#" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                Ver Solución
            </a>
            <a href="#" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                editar
            </a>
            <button {{--wire:click='$emit("mostrarAlerta",{{$vacante->id}}--)' --}}
                class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                Eliminar
            </button>

        </div>
    </div>
    <p class="text-gray-500">No existe este equipo <a href="{{route('create.equipo', 'software')}}"
            class="text-blue-600 cursor-pointer">Crear</a></p>
</div>