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
                {{ __('Añadir Stock') }}
            </h2>
        </div>

    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-gray-700 font-bold text-xl flex flex-col items-center justify-center">
                        <h2>Añadir Stock - {{$materiales->nombre}}</h2>
                        <h2>Cantidad Existente: {{$materiales->stock}}</h2>
                    </div>
                    <div class=" md:flex md:justify-center ">
                        <div class="md:w-1/2 ">
                            <form class="space-y-5" action="{{ route('materiales.store.stock', $materiales->id) }}"
                                method="POST">
                                @csrf
                                <div>
                                    <x-label for="stock" :value="__('Añadir Cantidad')" />

                                    <x-input id="stock" class="block mt-1 w-full" type="text" name="stock"
                                        placeholder="Ingrese la cantidad a añadir" :value="old('stock')" required
                                        autofocus />
                                </div>
                                @if ($errors->first('stock'))
                                <div id="alert-border-1" class=" mt-2 flex p-4 mb-4 bg-red-100 dark:bg-red-200"
                                    role="alert">
                                    <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="ml-3 text-sm font-medium text-red-700">
                                        {{ $errors->first('stock') }}
                                    </div>

                                </div>
                                @endif

                                <x-button type="submit" class="w-full h-10 justify-center ">
                                    {{ __('Guardar') }}
                                </x-button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>