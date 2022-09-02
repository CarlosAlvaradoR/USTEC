<div class="md:w-1/2 ">
    <form class="space-y-5">
        <div>
            <x-label for="codigo" :value="__('Código Patrimonial')" />

            <x-input id="codigo" class="block mt-1 w-full" type="text" wire:model="codigo"
                placeholder="Ingrese código patrimonial" :value="old('codigo')" required autofocus />
        </div>
        <div>
            <x-label for="nombre_equipo" :value="__('Nombre Equipo')" />

            <x-input id="nombre_equipo" class="block mt-1 w-full" type="text" name="nombre_equipo"
                placeholder="Nombre del Equipo" :value="old('nombre_equipo')" required autofocus />
        </div>
        <div>
            <x-label for="marca" :value="__('Marca')" />

            <x-input id="marca" class="block mt-1 w-full" type="text" name="marca" placeholder="Marca del Equipo"
                :value="old('marca')" required autofocus />
        </div>

        <div>
            <x-label for="descripcion" :value="__('Descripción')" />

            <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descripcion del equipo"
                class="rounded-md shadow-sm border-gray-300
           focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
           </textarea>
        </div>

        <x-button class="w-full h-10 justify-center ">
            {{ __('Crear') }}
        </x-button>

    </form>
</div>