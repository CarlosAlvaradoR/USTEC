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
                {{ __('Incidente') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-4">

        @if (session()->has('mensaje'))

        <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                {{session('mensaje')}}
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200 flex justify-between flex-col md:flex-row ">

                    <div>
                        <h3 class="text-xl flex gap-1 text-gray-800 "><svg xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 text-yellow-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg> {{$incidente->titulo}}</h3>
                        <div class="flex  items-center mb-2">
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-300">
                                <svg aria-hidden="true" class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{$incidente->created_at->diffForHumans()}}
                            </span>
                            <span
                                class="bg-blue-300 text-blue-800 text-xs font-semibold mr-2 px-2 py-0.5 rounded dark:bg-blue-200 dark:text-blue-900 cursor-pointer">{{$incidente->importancia->importancia}}
                            </span>

                            @if ( $incidente->estado === 2)
                            <a href="#solucion"
                                class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2 py-0.5 rounded dark:bg-red-200 dark:text-red-900 cursor-pointer">
                                Sin solucionar</a>
                            @else
                            <p
                                class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                Solucionado</p>
                            @endif
                        </div>
                        <p class="text-gray-600">{{$incidente->descripcion}}</p>
                    </div>
                    <div>
                        @if ( $incidente->estado === 2)
                        <a href="#solucion"
                            class="bg-blue-600 text-white text-xs font-semibold mr-2 px-2 py-1 rounded dark:bg-green-200  cursor-pointer sm:p-3 ">
                            Solucionar Ahora</a>
                        @else


                        @endif

                    </div>



                </div>
                @forelse ($incidente->solucion as $solucion)
                <div class=" p-6 bg-white border-b border-gray-200 ">

                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>


                        <p class="text-gray-600"><span class=" text-lg text-gray-800">
                                Solucion:</span>
                            {{$solucion->descripcion}}</p>
                    </div>

                    <div class="ml-5">
                        <p> <span class="font-bold text-sm text-gray-800">Materiales Usados:</span></p>
                        <ol class="space-y-1 max-w-md list-disc list-inside text-gray-500 ">
                            @forelse ($solucion->material as $mat)
                            <li class=" text-sm">{{$mat->pivot->cantidad}} {{$mat->nombre}}</li>
                            @empty
                            <li>No se usó materiales</li>
                            @endforelse
                        </ol>
                    </div>



                </div>

                @empty

                @endforelse
                @if ($incidente->equipo)
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <div class=" md:flex md:justify-between gap-5">
                        <div class="md:w-1/2 flex justify-between items-start flex-col md:flex-row ">
                            <div>
                                <h3 class="text-xl flex gap-1"><span class="font-bold text-lg text-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />
                                        </svg>
                                    </span>{{$incidente->equipo->nombre_equipo}}
                                </h3>

                                <div class="ml-5">
                                    <p><span class="font-bold text-sm text-gray-800">Código Patrimonial:
                                        </span>{{$incidente->equipo->codigo}} </p>
                                    <p><span class="font-bold text-sm text-gray-800">Ubicación: </span>
                                        {{$incidente->equipo->area->area}} </p>
                                    <p>{{$incidente->equipo->descripcion}} </p>
                                </div>


                            </div>
                            <div class="mt-3 mb-2 md:mt-0 md:mb-0">
                                <p class="flex gap-1 text-sm"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                                    </svg>Problemas: {{$incidente->equipo->incidentes->count()}} </p>
                                <a class="flex gap-1 underline text-sm"
                                    href="{{route('historial.incidente', $incidente->equipo)}}"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                    </svg>Historial


                                </a>

                            </div>
                        </div>
                        <div class="md:w-1/2 ">
                            <h3 class="text-xl flex gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                                </svg>
                                Últimos
                                incidentes</h3>
                            <div class="h-72 overflow-y-auto p-4">

                                <ol class="relative border-l border-gray-200 dark:border-gray-700">
                                    @forelse ($incidente->equipo->incidentes as $inc)
                                    <li class="mb-10 ml-6">
                                        <span
                                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-gray-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900">
                                            <svg aria-hidden="true" class="w-3 h-3 text-gray-600 dark:text-blue-400"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <h3
                                            class="flex items-center mb-1 text-lg font-semibold text-gray-600 dark:text-white ">
                                            <a href="{{route('show.incidente', $incidente)}}">
                                                {{$inc->titulo}} </a>
                                            {{-- <span
                                                class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">Latest</span>--}}
                                        </h3>
                                        <time
                                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                            <span
                                                class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-300">
                                                <svg aria-hidden="true" class="mr-1 w-3 h-3" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                {{$inc->created_at->diffForHumans()}}
                                            </span>
                                            <span
                                                class="bg-blue-200 text-blue-900 text-xs font-medium mr-2 px-2 py-0.5 rounded dark:bg-blue-200 dark:textblueo-900">{{$inc->importancia->importancia}}
                                            </span>
                                        </time>
                                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                            {{$inc->descripcion}}
                                        </p>

                                        @forelse ($inc->solucion as $solucion)
                                        <div class="ml-6 mt-2 p-3 bg-lime-50 border border-lime-50 rounded-lg">
                                            <div class="flex gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5 text-lime-600">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                                </svg>
                                                <h3 class="font-bold text-lime-600 ">Solución</h3>
                                            </div>
                                            <div class="mt-2 ml-5">
                                                <p class="text-gray-500 text-sm">
                                                    {{$solucion->descripcion}}
                                                </p>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="flex mt-2 p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
                                            role="alert">
                                            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Info</span>
                                            <div>
                                                <span class="font-medium">Atencion!</span> Este incidente aún no fue
                                                solucionado, <a class="font-bold  underline" href="#solucion">Solucionar
                                                    Ahora</a>
                                            </div>
                                        </div>

                                        @endforelse
                                    </li>


                                    @empty
                                    <p class="text-gray-600">El equipo no tiene incidentes aún</p>
                                    @endforelse
                                </ol>
                            </div>
                        </div>

                    </div>

                </div>

                @endif

                <div class="p-6 bg-white border-b border-gray-200">
                    @forelse ($incidente->solucion as $solucion)


                    @empty

                    <livewire:crear-solucion :incidente="$incidente">
                        @endforelse


                </div>
            </div>
        </div>
    </div>
</x-app-layout>