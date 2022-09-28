<div>
    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- mensaje si se creo por primera vez --}}
                    <div class="py-2 flex justify-between flex-col md:flex-row">
                        <h3 class="text-xl flex  gap-1 font-bold text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg> Usuarios</h3>
                        <a href="{{ route('users.create') }}"
                            class="flex items-center border rounded-lg  bg-blue-700 hover:bg-blue-800 transition-colors text-white text-sm  p-2 cursor-pointer  w-full md:w-auto first-letter:uppercase ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> Nuevo Usuario</a>
                    </div>


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
                    <div class="mt-3">
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
                                class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Buscar usuario" required>
                        </div>
                    </div>
                    @if ($users->count())
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-3">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="bg-gray-200">
                                    <th scope="col" class="py-3 px-6">
                                        Nº
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Nombre
                                    </th>
                                    <!--<th scope="col" class="py-3 px-6">
                                        Marca
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Unidad Medida
                                    </th>-->
                                    <th scope="col" class="py-3 px-6">
                                        Email
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Estado
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->id }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $user->name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post"
                                            class="form-delete" name="form-delete">
                                            @csrf
                                            @method('DELETE')
                                            <div class="flex ml-5 items-center">

                                                <div class=" cursor-pointer">
                                                    @if ($user->role != 'admin')
                                                    @if ($user->status == 1)
                                                    <button type="submit" title="Click para deshabilitar el usuario"
                                                        class=" text-white bg-lime-600 hover:bg-lime-700 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-md text-sm py-1 px-2 text-center  dark:bg-lime-600 dark:hover:bg-lime-700 dark:focus:ring-green-800">
                                                        Activo
                                                    </button>
                                                    @else
                                                    <button type="submit" title="Click para habilitar el usuario"
                                                        class=" text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-md text-sm py-1 px-2 text-centerdark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                        Inactivo
                                                    </button>
                                                    @endif
                                                    @endif

                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                    <td>


                                        <div
                                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                                            <a href=""
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                title="Editar información del usuario">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                        </div>


                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="px-6 py-6">
                        No existe ningún registro coincidente
                    </div>
                    @endif


                </div>
                {{ $users->links() }}
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
                        title: '¿Seguro de Actualizar la información?',
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