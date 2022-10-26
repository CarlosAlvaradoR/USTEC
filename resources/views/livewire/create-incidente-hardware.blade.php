<div>
    <div class="w-full p-6 bg-white">
        <h2 class="font-semibold text-xl text-gray-800">Reportar incidente en: <span
                class="font-normal text-gray-600">{{ $equipo->nombre_equipo . '-' . $equipo->marca }}</span>
        </h2>
    </div>

    {{--@if (session()->has('mensaje_hardware'))
        <div id="alert-1" class="flex p-4 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-800">
                {{ session('mensaje_hardware') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-blue-200 dark:text-blue-600 dark:hover:bg-blue-300"
                data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            
        </div>
    @endif--}}

    <div class="p-6 md:flex mt-3  ">
        <div class="md:w-full">
            <form class="w-full  " wire:submit.prevent='crearIncidente' novalidate>
                <div class=" w-full md:grid md:grid-cols-2 items-start gap-3 ">
                    <div>
                        <div>
                            <x-label for="titulo" :value="__('Titulo')" />

                            <x-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo"
                                :value="old('titulo')" autofocus placeholder='Ingrese un título' />
                            @error('titulo')
                                <livewire:mostrar-alerta :message='$message' />
                            @enderror
                        </div>
                        <div class="mt-4">
                            <x-label for="descripcion" :value="__('Descripción')" />

                            <textarea wire:model="descripcion" id="descripcion" cols="20" rows="5"
                                placeholder="Descripcion del incidente"
                                class="rounded-md shadow-sm border-gray-300
                                      focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full h-48">
                             </textarea>
                            @error('descripcion')
                                <livewire:mostrar-alerta :message='$message' />
                            @enderror
                        </div>

                    </div>
                    <div>


                        <div>
                            <x-label for="gravedad" :value="__('Gravedad')" />

                            <select wire:model="gravedad" id="gravedad"
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



                        <div class=" mt-11">
                            <x-button class="w-full h-10 justify-center">
                                {{ __('Guardar') }}
                            </x-button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>
