<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equipos') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-xl font-bold text-center mb-10">Editar Equipo</h1>
                    <div class=" md:flex md:justify-center ">
                        <div class="md:w-1/2 ">
                            <form method="POST" action="{{ route('equipos.update', $equipo->id) }}">
                                @csrf
                                @method('PUT')
                                <div>
                                    <x-label for="codigo" :value="__('Código Patrimonial')" />

                                    <x-input name="codigo" class="block mt-1 w-full" type="text"
                                        placeholder="Ingrese código patrimonial" value="{{old('codigo', $equipo->codigo)}}" required autofocus />

                                    <div id="alert-border-1" class=" mt-2 flex p-4 mb-4 bg-red-100 dark:bg-red-200"
                                        role="alert">
                                        <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div class="ml-3 text-sm font-medium text-red-700">
                                            M
                                        </div>

                                    </div>

                                </div>
                                <div>
                                    <x-label for="nombre_equipo" :value="__('Nombre Equipo')" />

                                    <x-input name="nombre_equipo" class="block mt-1 w-full" type="text"
                                         placeholder="Nombre del Equipo" value="{{old('nombre_equipo', $equipo->nombre_equipo)}}"
                                        required autofocus />
                                </div>
                                <div>
                                    <x-label for="marca" :value="__('Marca')" />

                                    <x-input name="marca" class="block mt-1 w-full" type="text"
                                        placeholder="Marca del Equipo" value="{{old('marca', $equipo->marca)}}" required autofocus />
                                    
                                </div>

                                <div>
                                    <x-label for="descripcion" :value="__('Descripción')" />

                                    <textarea name="descripcion" cols="30" rows="10" placeholder="Descripcion del equipo"
                                        class="rounded-md shadow-sm border-gray-300
                                   focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
                                   {{old('marca', $equipo->descripcion)}}
                                   </textarea>
                                </div>

                                <x-button class="w-full h-10 justify-center ">
                                    {{ __('Actualizar') }}
                                </x-button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
