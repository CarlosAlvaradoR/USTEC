<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Equipo') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-xl font-bold text-center text-gray-700 mb-5">Nuevo Equipo</h1>
                    <div class=" md:flex md:justify-center ">
                        <livewire:crear-nuevo-equipo />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>