<div>
    <div class=" p-2 border rounded-lg border-gray-400">
        <h2 class="font-bold text-xl">Reportar Incidente Software <span class="font-normal text-gray-600"></span> </h2>
    </div>
    @if (session()->has('mensaje-incidente'))
    <div id="alert-additional-content-3"
        class="p-4 mb-4 border border-green-300 rounded-lg bg-green-50 dark:bg-green-200" role="alert">
        <div class="flex flex-col items-center">

            <span class="sr-only">Info</span>
            <h3 class="text-lg font-medium text-green-700 dark:text-green-800">
                {{session('mensaje-incidente')}}
            </h3>

        </div>
    </div>
    @endif
    <div class=" md:flex mt-3 p-4  border rounded-lg border-gray-400">
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
                        <div class="mt-2">
                            <x-label for="descripcion" :value="__('Descripción')" />

                            <textarea wire:model="descripcion" id="descripcion" cols="30" rows="10"
                                placeholder="Descripcion del incidente" class="rounded-md shadow-sm border-gray-300
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
                            <select wire:model="area" id="area" class="w-full  rounded-md shadow-sm border-gray-300
                        focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <option value="">--Seleccione--</option>
                                @foreach ($areas as $area)
                                <option value="{{$area->id}}">{{$area->area}}</option>

                                @endforeach
                            </select>
                            @error('area')
                            <livewire:mostrar-alerta :message='$message' />
                            @enderror
                        </div>
                        <div class="mt-2">
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

                        <div class=" mt-4">
                            <x-button
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                                {{ __('Guardar') }}
                            </x-button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>