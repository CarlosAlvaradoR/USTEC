<div>
    <div class=" mt-2 overflow-x-auto relative shadow-md sm:rounded-lg">

        <livewire:filtrar-incidentes>
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
                    @forelse ($incidentes as $incidente)


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
                                class="font-medium text-black-600 dark:text-black-900 hover:underline">Ver</a>

                            <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                href="{{route('edit.incidentes',['incidente'=>$incidente, 'tipo'=>$incidente->tipo->tipo])}}">Editar</a>
                            <button wire:click='$emit("mostrarAlerta",{{$incidente->id}})'
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Eliminar</button>
                        </td>

                    </tr>

                    @empty
                    <tr class="bg-white border-b  ">

                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                            No hay incidentes aun
                        </th>
                    </tr>

                    @endforelse


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