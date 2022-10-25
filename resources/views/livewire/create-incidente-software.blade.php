<div>
    <div class="w-full p-6 bg-white">
        <h2 class="font-semibold text-xl text-gray-800">Reportar Incidente Software </h2>
    </div>
    @if (session()->has('mensaje_software'))
        <div class="flex p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Atención:</span>
                <ul class="mt-1.5 ml-4 text-blue-700 list-disc list-inside">
                    <li>{{ session('mensaje_software') }}</li>
            </div>
        </div>
    @endif

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
                            <x-label for="area" :value="__('Area')" />
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
