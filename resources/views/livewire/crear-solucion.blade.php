<div id="solucion">
    <h3 class="flex text-xl text-gray-700">
        Agregar Solución</h3>
    <div class="md:flex md:justify-center gap-5 items-center mt-2">

        <div class="md:w-1/2 ">
            <h3>Seleccionar Materiales (opcional)</h3>
            <div class="mt-1">
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
                        placeholder="Buscar material" required>
                </div>
            </div>
            @if ($materiales->count())
            <div class="overflow-x-auto h-52 overflow-y-auto relative shadow-md sm:rounded-lg mt-4">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="bg-gray-200">
                            <th scope="col" class="py-3 px-6">
                                Nº
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Material
                            </th>
                            <!--<th scope="col" class="py-3 px-6">
                                        Marca
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Unidad Medida
                                    </th>-->
                            <th scope="col" class="py-3 px-6">
                                Stock
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Agregar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $contador = 1;
                        @endphp
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
                            <!--<td class="py-4 px-6">
                                            Laptop
                                        </td>
                                        <td class="py-4 px-6">
                                            Samsung
                                        </td>-->
                            <td class="py-4 px-6">
                                {{ $material->stock }}
                            </td>
                            <td class="py-4 px-6 items-start">
                                @if ($material->stock <=0) <p>No hay stock disponible</p>
                                    @else
                                    <button
                                        wire:click='$emit("mostrarSeleccion","{{$material->nombre}}",{{$material->id}},{{$material->stock}})'>
                                        <i class="fa-solid fa-plus"></i></button>
                                    @endif
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

        <div class="md:w-1/2 ">

            <form method="POST" action="{{route('salida.store',$incidente)}}"
                class="m-auto flex flex-col justify-center">
                @csrf
                <div id="materiales" class="border-l-2 p-3 mb-2">
                    <p class="text-gray-600">No hay materiales agregados</p>
                </div>

                @if (session()->has('mensaje-error'))

                <div id="alert-3" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                        {{session('mensaje-error')}}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300"
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
                <div>
                    <x-label for="descripcion" :value="__('Descripción')" />
                    <textarea name="descripcion" id="descripcion" cols="10" rows="4" required
                        placeholder="Descripcion del equipo" class="rounded-md shadow-sm border-gray-300
                        focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
                        </textarea>

                </div>
                <x-button class=" h-10 justify-center ">
                    {{ __('Guardar Solución') }}
                </x-button>

            </form>

        </div>
    </div>
</div>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let seleccion = [];
    
Livewire.on('mostrarSeleccion', (nombre, id,stock) => {

        var material = {
        id: id,
        nombre: nombre,
        stock: stock
        };
    seleccion =[...seleccion.filter(selec => selec.nombre !== material.nombre)] ;
    seleccion.push(material); 
    
    mostrarSeleccion()
})


function mostrarSeleccion() {
    limpiar();
    const content = document.querySelector("#materiales");
  
    seleccion.forEach(sel => {
        const contenedorSel = document.createElement("DIV");
     /* Bonotes **/
        const btnQuitar = document.createElement("BUTTON");
        btnQuitar.setAttribute("type", "button");
     
     // btnQuitar.dataset.idParticipacion = part.id;
      btnQuitar.onclick = function () {
        confirmarQuitar({ ...sel });
      };

      const ic = document.createElement("I");
      ic.classList.add("fas");
      ic.classList.add("fa-minus-circle");
      ic.classList.add("text-red-600");
      const texto = document.createElement("SPAN");
      texto.textContent = "Quitar";


        const material = document.createElement("P");
        material.classList.add("text-gray-600");
        material.textContent = sel.nombre
    
       // material.setAttribute("name", 'material_id-' + sel.id);
        //material.textContent = sel.nombre;

        const inputCantidad = document.createElement("INPUT");
        inputCantidad.setAttribute("type", "number");
        inputCantidad.setAttribute("value", 1);
        inputCantidad.setAttribute("max", sel.stock);
        inputCantidad.setAttribute("min", 1);
        inputCantidad.setAttribute("name",  'cantidad'+ '-'+sel.id);
        inputCantidad.classList.add('rounded-md')
        inputCantidad.classList.add('shadow-sm')
        inputCantidad.classList.add('border-gray-300')
        inputCantidad.classList.add('w-20')
    
        btnQuitar.appendChild(ic);

        const conten = document.createElement("DIV");
        conten.classList.add('flex')
        conten.classList.add('gap-1')
        conten.appendChild(btnQuitar)
      
        conten.appendChild(material)
        contenedorSel.appendChild(conten)
        contenedorSel.appendChild(inputCantidad)
        contenedorSel.classList.add('flex')
        contenedorSel.classList.add('justify-between')
        contenedorSel.classList.add('items-center')
        contenedorSel.classList.add('mb-2')
        content.appendChild(contenedorSel)
        
    });

    
}

function confirmarQuitar(sel) {
   
        seleccion = seleccion.filter(selec => selec.nombre != sel.nombre);
        mostrarSeleccion();
  }

function limpiar() {
  const lista = document.querySelector("#materiales");
  while (lista.firstChild) {
    lista.removeChild(lista.firstChild);
  }
}

</script>

@endpush