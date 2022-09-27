<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="p-1"><button onclick="history.back()" class="text-blue-600  px-2 py-1  "><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Crear Incidente Hardware') }}
            </h2>
        </div>

    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- mensaje si se creo por primera vez --}}
                    @if (session()->has('mensaje'))
                    <div id="alert-additional-content-3"
                        class="p-4 mb-4 border border-green-300 rounded-lg bg-green-50 dark:bg-green-200" role="alert">
                        <div class="flex flex-col items-center">

                            <span class="sr-only">Info</span>
                            <h3 class="text-lg font-medium text-green-700 dark:text-green-800">
                                {{session('mensaje')}}
                            </h3>
                            <div class="mt-2 mb-4 text-sm text-green-700 dark:text-green-800">
                                Puede crear un incidente desde aqui
                            </div>
                        </div>
                    </div>
                    @endif


                    <h2 class="font-bold text-2xl">Equipo:
                        <span class="text-xl text-gray-600 font-bold"> {{$equipo->nombre_equipo}} -
                            {{$equipo->marca}}
                        </span>
                    </h2>

                </div>



            </div>
        </div>
    </div>

</x-app-layout>