<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Salidas') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if ($incidente->equipo)
                    <h3 class="font-bold uppercase ">Intervencion para: <span
                            class="lowercase text-gray-600">{{$incidente->titulo .' en ' .
                            $incidente->equipo->nombre_equipo .' - '. $incidente->equipo->marca}}
                        </span>

                    </h3>
                    @else

                    <h3 class="font-bold uppercase ">Intervencion para: <span
                            class="lowercase text-gray-600">{{$incidente->titulo}}
                        </span>
                        @endif


                </div>
            </div>

            <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="md:flex md:justify-center ">
                        <div class="md:w-1/2 ">

                            <form method="POST" action="{{route('salida.store',$incidente)}}"
                                class="m-auto flex flex-col justify-center">
                                @csrf
                                <div>
                                    <x-label for="descripcion" :value="__('Descripción')" />
                                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" required
                                        placeholder="Descripcion del equipo"
                                        class="rounded-md shadow-sm border-gray-300
                                        focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
                                        </textarea>
                                </div>
                                <x-button class=" h-10 justify-center ">
                                    {{ __('Guardar Solución') }}
                                </x-button>

                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>