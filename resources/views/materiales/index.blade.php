<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Materiales') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- mensaje si se creo por primera vez --}}
                    <div class="py-2">
                        <a href="{{ route('materiales.create') }}"
                            class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center float-right">
                            Crear</a>
                    </div>
                    <br><br>

                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Buscar</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Buscar material" required>
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                    <br>

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
                                        Marca
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Unidad Medida
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Stock
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($materiales as $material)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $material->id }}
                                        </th>
                                        <td class="py-4 px-6">
                                            {{ $material->nombre }}
                                        </td>
                                        <td class="py-4 px-6">
                                            Laptop
                                        </td>
                                        <td class="py-4 px-6">
                                            Samsung
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $material->stock }}
                                        </td>
                                        <td class="py-4 px-6 items-start">
                                            <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Añadir Material</a>
                                            <a href="{{ route('materiales.edit', $material->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>

</x-app-layout>
