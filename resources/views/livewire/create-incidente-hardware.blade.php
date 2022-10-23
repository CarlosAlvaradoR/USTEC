<div>
    <div class="w-full p-6 bg-white">
        <h2 class="font-semibold text-xl text-gray-800">Reportar incidente en: <span
                class="font-normal text-gray-600">{{$equipo->nombre_equipo .'-' .
                $equipo->marca}}</span> </h2>
    </div>
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

                            <select wire:model="gravedad" id="gravedad" class="rounded-md shadow-sm border-gray-300
                            focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
                                <option value="">--Seleccione--</option>
                                @foreach ($gravedades as $gravedad)
                                <option value="{{$gravedad->id}}">{{$gravedad->importancia}}</option>
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