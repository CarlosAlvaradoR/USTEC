<div>
    <div class="w-full p-6 bg-white">
        <h2 class="font-semibold text-xl text-gray-800">Reportar Incidente Software </h2>

    </div>


    <div class=" md:flex mt-3 p-4  ">
        <div class="md:w-full">
            <form class="w-full  " wire:submit.prevent='crearIncidente' novalidate>
                <div class=" w-full md:grid md:grid-cols-2 items-start gap-3 ">
                    <div>
                        <div>
                            <x-label for="titulo" :value="__('Titulo')" />

                            <x-input id="titulo" class="block mt-1 w-full" type="text" wire:model.defer="titulo"
                                :value="old('titulo')" autofocus placeholder='Ingrese un título' />
                            @error('titulo')
                                <livewire:mostrar-alerta :message='$message' />
                            @enderror
                        </div>
                        <div class="mt-2">
                            <x-label for="descripcion" :value="__('Descripción')" />

                            <textarea wire:model.defer="descripcion" id="descripcion" cols="20" rows="5"
                                placeholder="Descripcion del incidente"
                                class="rounded-md shadow-sm border-gray-300
                       focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
                       </textarea>
                            @error('descripcion')
                                <livewire:mostrar-alerta :message='$message' />
                            @enderror
                        </div>

                    </div>
                    <div>

                        <div>
                            <x-label for="area" :value="__('Oficina')" />
                            <select wire:model.defer="area" id="area"
                                class="w-full  rounded-md shadow-sm border-gray-300
                        focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <option value="">--Seleccione--</option>
                                @foreach ($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->area }}</option>
                                @endforeach
                            </select>
                            @error('area')
                                <livewire:mostrar-alerta :message='$message' />
                            @enderror
                        </div>
                        <div class="mt-2">
                            <x-label for="gravedad" :value="__('Gravedad')" />

                            <select wire:model.defer="gravedad" id="gravedad"
                                class="rounded-md shadow-sm border-gray-300
                            focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
                                <option value="">--Seleccione--</option>
                                @foreach ($gravedades as $gravedad)
                                    <option value="{{ $gravedad->id }}">{{ $gravedad->importancia }}</option>
                                @endforeach

                            </select>
                            @error('gravedad')
                                <livewire:mostrar-alerta :message='$message' />
                            @enderror
                        </div>

                        <div class=" mt-4">
                            <x-button
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full justify-center px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                                {{ __('Guardar') }}
                            </x-button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>


