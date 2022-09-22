<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Incidente Hardware') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @if (session()->has('mensaje-incidente'))
                <div id="alert-additional-content-3"
                    class="p-4 mb-4 border border-green-300 rounded-lg bg-green-50 dark:bg-green-200" role="alert">
                    <div class="flex flex-col items-center">

                        <span class="sr-only">Info</span>
                        <h3 class="text-lg font-medium text-green-700 dark:text-green-800">
                            {{session('mensaje-incidente')}}
                        </h3>

                    </div>
                </div>
                @endif

            </div>
            <livewire:historial-incidencias />
        </div>
    </div>
</x-app-layout>