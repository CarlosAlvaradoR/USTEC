<div class=" w-full p-4 bg-white flex   gap-1  ">

    <form wire:submit.prevent='leerDatosFormulario' class="flex-1 grid grid-cols-1  md:grid-cols-4 gap-1 ">

        <div>

            <label for="tipo" class="sr-only">Underline select</label>
            <select wire:model="tipo"
                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option value="">Seleccione tipo</option>
                @foreach ($tipos as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>

                @endforeach

            </select>

        </div>
        <div>

            <label for="estado" class="sr-only">Underline select</label>
            <select wire:model="estado"
                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option value="">Seleccione estado</option>
                <option value="1">Solucionado</option>
                <option value="2">No Solucionado </option>
            </select>

        </div>

        <div>

            <label for="gravedad" class="sr-only">Underline select</label>
            <select wire:model="gravedad"
                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option value="">Seleccione gravedad</option>
                @foreach ($gravedades as $gravedad)
                <option value="{{$gravedad->id}}">{{$gravedad->importancia}}</option>

                @endforeach

            </select>

        </div>

        <div>
            <x-button class=" h-10 justify-center ">
                {{ __('Filtrar') }}
            </x-button>
        </div>
    </form>
</div>