<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Salidas') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Lista de Materiales Usados para la solución</h1>
                </div>
            </div>

            <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="md:flex md:justify-center ">
                        <div class="md:w-1/2 ">

                            <form action="{{ route('salida.materiales.store') }}" method="post">
                                @csrf
                                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr class="bg-gray-200">
                                                <th scope="col" class="py-3 px-6">
                                                    Nº
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Material
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Cantidad
                                                </th>
                                                <!--<th scope="col" class="py-3 px-6">
                                                Unidad Medida
                                            </th>-->
                                                <th scope="col" class="py-3 px-6">
                                                    Stock
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Acciones
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $contador = 1;
                                            @endphp
                                            @if ($materiales)
                                                @foreach ($materiales as $material)
                                                    <tr
                                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                        <th scope="row"
                                                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $contador++ }}
                                                        </th>
                                                        <td class="py-4 px-6">
                                                            {{ $material->nombre }}
                                                        </td>
                                                        <td class="py-4 px-6">
                                                            <input type="text" value="">
                                                            <input type="text" name="material_id"
                                                                value="{{ $material->id }}">
                                                        </td>
                                                        <!--<td class="py-4 px-6">
                                                        Samsung
                                                    </td>-->
                                                        <td class="py-4 px-6">
                                                            {{ $material->stock }}
                                                        </td>
                                                        <td class="py-4 px-6 items-start">


                                                            <div class="flex">
                                                                <div>
                                                                    <button type="submit" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>


                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </form>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
