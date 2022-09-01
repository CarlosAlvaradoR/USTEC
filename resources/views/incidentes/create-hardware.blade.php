<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Incidente') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center ">
                        <form action="">
                            <div class="flex items-end gap-1">
                                <div>
                                    <x-label for="codigo" :value="__('Código')" />

                                    <x-input id="codigo" class="block mt-1 w-60" type="text" name="codigo"
                                        placeholder="Ingrese código patrimonial" :value="old('codigo')" required
                                        autofocus />
                                </div>
                                <x-button class=" h-10 justify-center ">
                                    {{ __('Buscar') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
                {{--Resultados--}}
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- en caso exista --}}
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
                                <a href="#"
                                    class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                                    Ver Solución
                                </a>
                                <a href="#"
                                    class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                                    editar
                                </a>
                                <button {{--wire:click='$emit("mostrarAlerta",{{$vacante->id}}--)' --}}
                                    class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                                    Eliminar
                                </button>

                            </div>
                        </div>
                        <p class="text-gray-500">No existe este equipo <a href="#"
                                class="text-blue-600 cursor-pointer">Crear</a></p>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>