<div>

    <livewire:buscar-equipo />

    @if ($equipo)
    <div class="bg-white mt-2 p-6 mt-5shadow-sm sm:rounded-lg">
        {{-- @forelse ($equipos as $equipo) --}}
        <div class=" md:flex md:justify-between mb-3 ">
            <div>
                <h2 class=" text-2xl">{{$equipo->nombre_equipo . ' ' .
                    $equipo->marca}}</h2>
                <p class="text-gray-500 text-sm">{{$equipo->descripcion}}</p>
            </div>
            @auth

            <div class="md:mt-0 mt-3">
                <a class="flex items-center border rounded-lg  bg-blue-700 hover:bg-blue-800 transition-colors text-white text-sm  p-2 cursor-pointer  w-full md:w-auto"
                    href="{{route('equipo.create.incidentes',$equipo)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Nuevo Incidente</a>
            </div>
            @endauth
        </div>
        <hr class="my-2 h-px bg-gray-200 border-0 dark:bg-gray-700">
        <div class=" mt-6">
            <div class="flex justify-between">
                <h2 class="font-bold text-gray-600 text-2xl ">Historial</h2>
                <a href="{{route('historial.incidente', $equipo)}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                </a>

            </div>


            <div class="mt-3 px-6  ">
                <ol class="relative border-l border-gray-200 dark:border-gray-700">
                    @forelse ($equipo->incidentes as $incidente)
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-gray-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-gray-900">
                            <svg aria-hidden="true" class="w-3 h-3 text-gray-600 dark:text-blue-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-600 dark:text-white "> <a
                                href="{{route('show.incidente', $incidente)}}">
                                {{$incidente->titulo}} </a>
                            {{-- <span
                                class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">Latest</span>--}}
                        </h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
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
                                class="bg-blue-200 text-blue-900 text-xs font-medium mr-2 px-2 py-0.5 rounded dark:bg-blue-200 dark:textblueo-900">{{$incidente->importancia->importancia}}
                            </span>
                        </time>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                            {{$incidente->descripcion}}
                        </p>

                        @forelse ($incidente->solucion as $solucion)
                        <div class="ml-6 mt-2 p-3 bg-lime-50 border border-lime-50 rounded-lg">
                            <div class="flex gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-lime-600">
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
                            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Atencion!</span> Este incidente aún no fue solucionado, <a
                                    class="font-bold  underline" href="{{route('salida.index',$incidente )}}">Solucionar
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


            <hr class="my-5 h-px bg-gray-200 border-0 dark:bg-gray-700">


        </div>

    </div>

    @else
    <div>
        @if (session()->has('mensaje'))

        <div class="flex p-4 mt-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">{{session('mensaje')}}!</span>
                @auth

                <a href="{{route('create.equipo')}}"
                    class="font-semibold underline hover:text-blue-800 dark:hover:text-blue-900">Crea uno
                    nuevo aqui</a>.
                @endauth
            </div>
        </div>


        @else
        @auth
        <div class="p-6">
            <p class="text-gray-500 ">¿No encuentras el equipo?
                <a href="{{route('create.equipo')}}" class="text-blue-600 cursor-pointer underline">Crea uno
                    nuevo aqui</a>
            </p>
        </div>
        @endauth


        @endif
    </div>
    @endif

</div>