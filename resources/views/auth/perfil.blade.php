<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar Perfil') }}
        </h2>
    </x-slot>
    <div class="flex flex-col md:flex-row gap-4 justify-between items-start p-6  ">
        <div class="w-full">
            <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 ">
                <div class="overflow-hidden shadow-sm rounded-lg bg-white">
                    <div class="bg-blue-700 p-4">
                        <h1 class="text-xl text-white font-bold text-center ">Información personal</h1>
                    </div>
                    <div class=" md:flex md:justify-center p-2">
                        <div class="md:w-2/3 ">
                            @if (session('notification'))
                                <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200"
                                    role="alert">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                        {{ session('notification') }}
                                    </div>
                                    <button type="button"
                                        class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                                        data-dismiss-target="#alert-3" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            @endif

                            <form class="space-y-3 py-2" action="#" method="POST">
                                @csrf
                                <div>
                                    <x-label for="password_actual" :value="__('Nombre de Usuario')" />

                                    <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                        placeholder="Nombre del Usuario" value="{{ Auth::user()->name }}" required
                                        autofocus />
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
                                    <x-label for="stock" :value="__('Correo')" />

                                    <x-input id="stock" class="block mt-1 w-full" type="text" name="stock"
                                        placeholder="Email del Usuario" value="{{ Auth::user()->email }}" required
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
                                <!--<div class="flex justify-center">
                                    <x-button type="submit" class="h-10 justify-center ">
                                        {{-- __('Actualizar') --}}
                                    </x-button>
                                </div>-->

                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="w-full">
            <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-sm rounded-lg">
                    <div class=" bg-white border-b border-gray-200">
                        <div class="bg-blue-700 p-4">
                            <h1 class="text-xl text-white font-bold text-center ">Cambiar Contraseña</h1>
                        </div>
                        <div class=" md:flex md:justify-center p-2">
                            <div class="md:w-2/3 ">
                                @if (session('notificationPassword'))
                                    <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200"
                                        role="alert">
                                        <svg aria-hidden="true"
                                            class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                            {{ session('notificationPassword') }}
                                        </div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                                            data-dismiss-target="#alert-3" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                @endif

                                @if (session('notificationError'))
                                    <div id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200"
                                        role="alert">
                                        <svg aria-hidden="true"
                                            class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800"
                                            fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                                            {{ session('notificationError') }}
                                        </div>
                                        <button type="button"
                                            class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300"
                                            data-dismiss-target="#alert-2" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                @endif

                                <form class="space-y-3 py-2" action="{{ route('perfil.change') }}" method="POST">
                                    @csrf
                                    <div>
                                        <x-label for="password_actual" :value="__('Password Actual')" />

                                        <x-input id="password_actual" class="block mt-1 w-full" type="password"
                                            name="password_actual" placeholder="Ingrese su contraseña actual"
                                            value="" required autofocus />
                                    </div>
                                    @if ($errors->first('password_actual'))
                                        <div id="alert-border-1"
                                            class=" mt-2 flex p-4 mb-4 bg-red-100 dark:bg-red-200" role="alert">
                                            <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <div class="ml-3 text-sm font-medium text-red-700">
                                                {{ $errors->first('password_actual') }}
                                            </div>

                                        </div>
                                    @endif

                                    <div>
                                        <x-label for="password" :value="__('Contraseña Nueva')" />

                                        <x-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" placeholder="Ingrese Nueva Contraseña" value=""
                                            required autofocus />
                                    </div>
                                    @if ($errors->first('password'))
                                        <div id="alert-border-1"
                                            class=" mt-2 flex p-4 mb-4 bg-red-100 dark:bg-red-200" role="alert">
                                            <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <div class="ml-3 text-sm font-medium text-red-700">
                                                {{ $errors->first('password') }}
                                            </div>

                                        </div>
                                    @endif

                                    <div>
                                        <x-label for="password_confirmation" :value="__('Confirmar Contraseña Nueva')" />

                                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                            name="password_confirmation" placeholder="Repita la contraseña"
                                            value="" required autofocus />
                                    </div>
                                    <div class="flex justify-center">

                                        <x-button type="submit" class=" justify-center h-10 shadow-lg  ">
                                            {{ __('Actualizar Contraseña') }}
                                        </x-button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="flex justify-center m-3">
        <p class="text-gray-400">OGTISE - UNASAM</p>
    </div>

</x-app-layout>
