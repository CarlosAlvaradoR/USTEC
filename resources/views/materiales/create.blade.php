<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Equipo') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-xl font-bold text-center mb-10">Crear Material</h1>
                    <div class=" md:flex md:justify-center ">
                        <div class="md:w-1/2 ">
                            <form class="space-y-5">
                                <div>
                                    <x-label for="nombre_material" :value="__('Nombre Material')" />

                                    <x-input id="nombre_material" class="block mt-1 w-full" type="text"
                                        wire:model="nombre_equipo" placeholder="Nombre del Material" :value="old('nombre_equipo')"
                                        required autofocus />
                                </div>
                                <div>
                                    <x-label for="stock" :value="__('Cantidad')" />

                                    <x-input id="stock" class="block mt-1 w-full" type="text"
                                        placeholder="Ingrese la cantidad del producto" :value="old('stock')" required autofocus />
                                </div>
                                <x-button class="w-full h-10 justify-center ">
                                    {{ __('Crear') }}
                                </x-button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
