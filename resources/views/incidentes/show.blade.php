<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Incidentes') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-bold text-xl ">Ultimos Incidentes Registrados</h2>
                    {{-- <p>Total {{$incidentes->count()}}</p> --}}
                    <div class=" mt-2 overflow-x-auto relative shadow-md sm:rounded-lg">
                        <div class="p-4 bg-white ">
                            <label for="table-search" class="sr-only">Buscar</label>
                            <div class="relative mt-1">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 " aria-hidden="true" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="table-search"
                                    class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                    placeholder="Buscar">
                            </div>
                        </div>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>

                                    <th scope=" col" class="py-3 px-6">
                                        Titulo
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Estado
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Registrado
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Gravedad
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Tipo
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incidentes as $incidente)


                                <tr class="bg-white border-b  ">

                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                        {{$incidente->titulo}}
                                    </th>
                                    <td class="py-4 px-6 ">
                                        {{$incidente->estado() }}
                                    </td>
                                    <td class="py-4 px-6 ">
                                        {{$incidente->created_at->diffForHumans()}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{$incidente->importancia->importancia}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{$incidente->tipo->tipo}}
                                    </td>
                                    <td class="py-4 px-6 space-x-1">

                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-900 hover:underline">Ver</a>

                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                        <a href="#"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">Eliminar</a>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>


                        </table>
                    </div>
                    <div class=" mt-2">
                        {{$incidentes->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>