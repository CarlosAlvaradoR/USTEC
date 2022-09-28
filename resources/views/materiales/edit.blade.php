<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Material') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-xl text-gray-700 font-bold text-center ">Editar Material</h2>
                    <div class=" md:flex md:justify-center ">
                        <div class="md:w-1/2 ">
                            <form class="space-y-5" action="{{ route('materiales.update', $material->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div>
                                    <x-label for="nombre" :value="__('Nombre Material')" />

                                    <x-input id="nombre" name="nombre" class="block mt-1 w-full" type="text"
                                        wire:model="nombre_equipo" placeholder="Nombre del Material"
                                        value="{{old('nombre',$material->nombre)}}" required autofocus />
                                </div>
                                <div>
                                    <x-label for="stock" :value="__('Cantidad')" />

                                    <x-input id="stock" name="stock" class="block mt-1 w-full" type="number"
                                        placeholder="Ingrese la cantidad del producto"
                                        value="{{old('nombre',$material->stock)}}" required autofocus />
                                </div>
                                <x-button class="w-full h-10 justify-center ">
                                    {{ __('Actualizar') }}
                                </x-button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>