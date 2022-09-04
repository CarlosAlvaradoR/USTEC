<div>
    <h2>Reportar incidente en: {{$equipo->nombre_equipo .'-' . $equipo->marca}}</h2>
    <div class=" md:flex md:justify-center ">
        <div class="md:w-1/2 ">
            <form class=" md:grid md:grid-cols-2 items-center gap-3" wire:submit.prevent='crearEquipo' novalidate>
                <div>
                    <x-label for="area" :value="__('Area')" />

                    <x-input id="area" class="block mt-1 w-full" type="text" wire:model="area"
                        placeholder="Ingrese Area" :value="old('area')" required autofocus />

                    @error('area')
                    <livewire:mostrar-alerta :message='$message' />
                    @enderror
                </div>
                <div>
                    <x-label for="gravedad" :value="__('Gravedad')" />

                    <x-input id="gravedad" class="block mt-1 w-full" type="text" wire:model="gravedad"
                        placeholder="Gravedad.." :value="old('gravedad')" required autofocus />
                    @error('gravedad')
                    <livewire:mostrar-alerta :message='$message' />
                    @enderror
                </div>

                <div>
                    <x-label for="descripcion" :value="__('Descripción')" />

                    <textarea wire:model="descripcion" id="descripcion" cols="30" rows="10"
                        placeholder="Descripcion del incidente" class="rounded-md shadow-sm border-gray-300
               focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
               </textarea>
                    @error('descripcion')
                    <livewire:mostrar-alerta :message='$message' />
                    @enderror
                </div>

                <x-button class="w-full h-10 justify-center ">
                    {{ __('Crear') }}
                </x-button>

            </form>
        </div>
    </div>
</div>