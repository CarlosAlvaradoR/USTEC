<div>
    <div class="flex items-center ">
        <form action="" wire:submit.prevent='leerDatosFormulario' novalidate>
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