<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Equipo') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-xl font-bold text-center mb-10">Crear Material</h1>
                    <div class=" md:flex md:justify-center ">
                        <div class="md:w-1/2 ">
                            <form class="space-y-5" action="{{ route('materiales.store') }}" method="POST">
                                @csrf
                                <div>
                                    <x-label for="nombre" :value="__('Nombre Material')" />

                                    <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                        placeholder="Nombre del Material" :value="old('nombre')" required autofocus />
                                </div>
                                @if ($errors->first('nombre'))
                                    <div id="alert-border-1" class=" mt-2 flex p-4 mb-4 bg-red-100 dark:bg-red-200"
                                        role="alert">
                                        <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div class="ml-3 text-sm font-medium text-red-700">
                                            {{ $errors->first('nombre') }}
                                        </div>

                                    </div>
                                @endif

                                <div>
                                    <x-label for="stock" :value="__('Cantidad')" />

                                    <x-input id="stock" class="block mt-1 w-full" type="text" name="stock"
                                        placeholder="Ingrese la cantidad del producto" :value="old('stock')" required
                                        autofocus />
                                </div>
                                @if ($errors->first('stock'))
                                    <p class="text-danger">
                                        {{ $errors->first('stock') }}
                                    </p>
                                @endif

                                <x-button type="submit" class="w-full h-10 justify-center ">
                                    {{ __('Crear') }}
                                </x-button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
