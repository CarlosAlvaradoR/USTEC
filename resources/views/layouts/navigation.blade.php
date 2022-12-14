<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    @auth


                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        {{-- ** dropdown este incidentes no esta en uso --}}
                        {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>Crear Incidente</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <x-dropdown-link :href="route('incidentes.create', 'hardware')">
                                    {{ __('Hardware') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('incidentes.create', 'software')">
                                    {{ __('Software') }}
                                </x-dropdown-link>

                            </x-slot>
                        </x-dropdown>
                    </div> --}}

                       {{-- @if (Auth::user()->rol_id == 1 || Auth::user()->rol_id == 2)--}}
                            <x-nav-link :href="route('incidentes.show')" :active="request()->routeIs('incidentes.show')">
                                {{ __('Incidentes') }}
                                @if (auth()->user()->sinSolucionar() > 0)
                                    <span
                                        class=" ml-1  hover:animate-ping w-4 h-4 bg-red-600 hover:bg-red-800 rounded-full flex flex-col justify-center items-center text-xs text-white font-extrabold">
                                        {{ auth()->user()->sinSolucionar() }}</span>
                                @endif

                            </x-nav-link>
                            <x-nav-link :href="route('index.materiales')" :active="request()->routeIs('index.materiales')">
                                {{ __('Materiales') }}
                            </x-nav-link>
                       {{-- @endif--}}
                        {{--@if (Auth::user()->rol_id == 1 || Auth::user()->rol_id == 2 || Auth::user()->rol_id == 3)--}}
                            <x-nav-link :href="route('index.equipos')" :active="request()->routeIs('index.equipos')">
                                {{ __('Equipos') }}
                            </x-nav-link>
                        {{--@endif--}}



                        <div class="inline-flex items-center">
                            <button id=" dropdownDefault" data-dropdown-toggle="dropdown"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">Crear Incidente<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdown"
                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 610px);">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                    <li>
                                        <a href="{{ route('incidentes.create', 'hardware') }}"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hardware</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('incidentes.create', 'software') }}"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Software</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    @endauth
                    @guest

                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Consulta') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('')">
                            {{ __('Acerca de') }}
                        </x-nav-link>
                    @endguest
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            @auth
                                <div>{{ Auth::user()->name }}</div>
                            @endauth


                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        @guest

                            <x-dropdown-link :href="route('login')">
                                {{ __('Log in') }}
                            </x-dropdown-link>
                        @endguest
                        @auth
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('perfil')">
                                    {{ __('Mi perfil') }}
                                </x-dropdown-link>
                                @if (Auth::user()->rol_id == 1)
                                    <x-dropdown-link :href="route('users.index')">
                                        {{ __('Administrar Usuarios') }}
                                    </x-dropdown-link>
                                @endif

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        @endauth
                    </x-slot>

                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @auth


                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('incidentes.show')" :active="request()->routeIs('incidentes.show')">
                    {{ __('Incidentes') }}
                    @if (auth()->user()->sinSolucionar() > 0)
                        <span
                            class=" ml-1  hover:animate-ping w-4 h-4 bg-red-600 hover:bg-red-800 rounded-full flex flex-col justify-center items-center text-xs text-white font-extrabold">
                            {{ auth()->user()->sinSolucionar() }}</span>
                    @endif

                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('index.materiales')" :active="request()->routeIs('index.materiales')">
                    {{ __('Materiales') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('index.equipos')" :active="request()->routeIs('index.equipos')">
                    {{ __('Equipos') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('incidentes.create', 'hardware')" :active="request()->routeIs('incidentes.create', 'hardware')">
                    {{ __('Incidente Hardware') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('incidentes.create', 'software')" :active="request()->routeIs('incidentes.create', 'software')">
                    {{ __('Incidente Software') }}
                </x-responsive-nav-link>
            @endauth
            @guest
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Consulta') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('')">
                    {{ __('Acerca de') }}
                </x-responsive-nav-link>
            @endguest


        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            @endauth
            <div class="mt-3 space-y-1">
                @guest

                    <x-dropdown-link :href="route('login')">
                        {{ __('Log in') }}
                    </x-dropdown-link>
                @endguest
                <!-- Authentication -->
                @auth

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('perfil')">
                            {{ __('Mi perfil') }}
                        </x-dropdown-link>
                        @if (Auth::user()->rol_id == 1)
                            <x-dropdown-link :href="route('users.index')">
                                {{ __('Administrar Usuarios') }}
                            </x-dropdown-link>
                        @endif
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
