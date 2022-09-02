<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Incidente') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center ">
                        <form action="">
                            <div class="flex items-end gap-1">
                                <div>
                                    <x-label for="codigo" :value="__('Código')" />

                                    <x-input id="codigo" class="block mt-1 w-60" type="text" name="codigo"
                                        placeholder="Ingrese código patrimonial" :value="old('codigo')" required
                                        autofocus />
                                </div>
                                <x-button class=" h-10 justify-center ">
                                    {{ __('Buscar') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">



                </div>
            </div>




        </div>
    </div>
</x-app-layout>