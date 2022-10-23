<div class="p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
    <div class="flex items-center ">
        <form method="GET" wire:submit.prevent='leerDatosFormulario' novalidate>
            @csrf
            @method('PUT')
            <div class="flex items-end gap-1">
                <div>
                    <x-label for="codigo" :value="__('Código')" />

                    <x-input id="codigo" class="block mt-1 w-60" type="text" wire:model="codigo"
                        placeholder="Ingrese código patrimonial" :value="old('codigo')" required autofocus />

                </div>
                <x-button class=" h-10 justify-center ">
                    {{ __('Buscar') }}
                </x-button>

            </div>
            @error('codigo')
            <livewire:mostrar-alerta :message='$message' />

            @enderror
        </form>
    </div>

</div>