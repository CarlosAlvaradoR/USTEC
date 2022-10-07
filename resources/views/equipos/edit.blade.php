<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="p-1"><button onclick="history.back()" class="text-blue-600  px-2 py-1  "><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Equipo') }}
            </h2>
        </div>

    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
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
                                        placeholder="Ingrese código patrimonial"
                                        value="{{ old('codigo', $equipo->codigo) }}" required autofocus />



                                </div>
                                @error('codigo')
                                    <livewire:mostrar-alerta :message='$message' />
                                @enderror
                                <div>
                                    <x-label for="nombre_equipo" :value="__('Nombre Equipo')" />

                                    <x-input name="nombre_equipo" class="block mt-1 w-full" type="text"
                                        placeholder="Nombre del Equipo"
                                        value="{{ old('nombre_equipo', $equipo->nombre_equipo) }}" required autofocus />
                                </div>
                                @error('nombre_equipo')
                                    <livewire:mostrar-alerta :message='$message' />
                                @enderror
                                <div>
                                    <x-label for="marca" :value="__('Marca')" />

                                    <x-input name="marca" class="block mt-1 w-full" type="text"
                                        placeholder="Marca del Equipo" value="{{ old('marca', $equipo->marca) }}"
                                        required autofocus />

                                </div>
                                @error('marca')
                                    <livewire:mostrar-alerta :message='$message' />
                                @enderror
                                <div>
                                    <x-label for="descripcion" :value="__('Descripción')" />

                                    <textarea name="descripcion" cols="30" rows="10" placeholder="Descripcion del equipo"
                                        class="rounded-md shadow-sm border-gray-300
                                   focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">
                                   {{ old('marca', $equipo->descripcion) }}
                                   </textarea>
                                </div>
                                @error('descripcion')
                                    <livewire:mostrar-alerta :message='$message' />
                                @enderror
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
