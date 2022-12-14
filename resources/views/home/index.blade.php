<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
            {{ __('Consulta') }}
        </h2>
    </x-slot>
    <div class=" bg-gray-50 overflow-hidden lg:py-24 bg-[url('../img/back.jpg')] bg-no-repeat bg-cover ">
        <div class=" max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            <div class="relative backdrop-blur-sm bg-white/30 p-5 mt-3">

                <h2 class="text-center text-4xl leading-8 font-extrabold tracking-tight text-blue-700 sm:text-6xl">
                    Consulta el estado de tu equipo</h2>
                <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-gray-50">Conoce mas sobre el historial de
                    problemas y las soluciones que puedes usar ahora</p>

                <div class="grid place-items-center mt-10">
                    <livewire:historial-incidencias>
                </div>

            </div>

        </div>

    </div>


</x-app-layout>