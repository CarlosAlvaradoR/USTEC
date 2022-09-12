<div>
    <div class=" mt-2 overflow-x-auto relative shadow-md sm:rounded-lg">
        <div class="p-4 bg-white ">
            <label for="table-search" class="sr-only">Buscar</label>
            <div class="relative mt-1">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 " aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
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

                        <a href="{{route('show.incidente', $incidente)}}"
                            class="font-medium text-blue-600 dark:text-blue-900 hover:underline">Ver</a>

                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                            href="{{route('equipo.edit.incidentes', $incidente )}}">Editar</a>
                        <button wire:click='$emit("mostrarAlerta",{{$incidente->id}})'
                            class="font-medium text-red-600 dark:text-red-500 hover:underline">Eliminar</button>
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



@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Livewire.on('mostrarAlerta', incidenteId => {
        Swal.fire({
            title: 'Eliminar Incidente?',
            text: "Un incidente eliminado tambien elimina la solución aplicada",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                //eliminar la vacante
                Livewire.emit('eliminarIncidente',incidenteId)
                Swal.fire(
                'Se Eliminó el incidente!',
                'Eliminado Correctamente',
                'success'
                )
            }
        })
    });
    
</script>

@endpush