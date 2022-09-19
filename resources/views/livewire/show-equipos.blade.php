<div>
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

                    @if (session('notification'))
                        <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                {{ session('notification') }}
                            </div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                                data-dismiss-target="#alert-3" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    @endif

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
                        <input type="search" id="default-search" wire:model="search"
                            class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Buscar equipo por código o nombre" required>
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
                                        CÓDIGO EQUIPO
                                    </th>
                                    <!--<th scope="col" class="py-3 px-6">
                                        Marca
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Unidad Medida
                                    </th>-->
                                    <th scope="col" class="py-3 px-6">
                                        NOMBRE
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        MARCA
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        DESCRIPCIÓN
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
                                @foreach ($equipos as $equipo)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $contador++ }}
                                        </th>
                                        <td class="py-4 px-6">
                                            {{ $equipo->codigo }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $equipo->nombre_equipo }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $equipo->marca }}
                                        </td>
                                        <!--<td class="py-4 px-6">
                                            Laptop
                                        </td>
                                        <td class="py-4 px-6">
                                            Samsung
                                        </td>-->
                                        <td class="py-4 px-6">
                                            {{ $equipo->descripcion }}
                                        </td>
                                        <td class="py-4 px-6 items-start">

                                            <form action="{{ route('equipos.destroy', $equipo->id) }}" method="post"
                                                class="form-delete" name="form-delete">
                                                @csrf
                                                @method('DELETE')
                                                <div class="flex">
                                                    <div
                                                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                                                        <a href="{{ route('equipos.edit', $equipo->id) }}"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                            title="Editar equipo">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>

                                                    </div>
                                                    <div
                                                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                                                        <button type="submit"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                            title="Eliminar equipo">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                {{ $equipos->links() }}
            </div>
        </div>
    </div>
</div>
<script>
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.form-delete')
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault()
                    event.stopPropagation()
                    Swal.fire({
                        title: '¿Confirma la eliminación del registro?',
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                        }
                    })
                }, false)
            })
    })()
</script>
