<nav class="lg:py-5 py-3 w-full border-b z-20 bg-white lg:relative shadow"
    x-data="{ open: false, openDropdown: false, isOpenChangeLocalizationModal: false, changeLocalizationAction() { this.$refs.change_localization_button.classList.add('cursor-wait', 'opacity-30'); this.$refs.change_localization_form.submit(); } }">
    <div class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto flex items-center justify-between">

        <!-- Logo -->
        <a href="{{ route('front.index') }}"
            class="text-blue-600 border border-gray-400 text-xl font-serif transform scale-100 -rotate-3 hover:-rotate-6 hover:scale-110 bg-green-100 px-2 py-1 rounded-3xl italic">
            <span class="">xChange</span>
            {{-- <img class="h-7 flex-shrink-0" src="{{ asset('/images/logo/logo-xchange.png') }}" alt="logo xchange">
            --}}
        </a>

        <ul class="hidden md:flex md:items-center tracking-normal text-gray-500 space-x-4 text-sm font-medium">
            <li class="items-center">
                <a href="{{ route('front.index') }}" class="{{ guessActive('front.index') }}">Home</a>
            </li>
            {{-- <li class="">
                <a href="" class="duration-300 hover:text-gray-800">About</a>
            </li> --}}
            <li class="items-center">
                <a href="{{ route('front.contact') }}" class="{{ guessActive('front.contact') }}">Contacter</a>
            </li>
            <li class="items-center">
                <a href="{{ route('front.community') }}"
                    class="duration-300 {{ guessActive('front.community') }}">Communauté</a>
            </li>
            <li>
                <a href="javascript:void(0)" @click.prevent="isOpenChangeLocalizationModal = true"
                    class="duration-300 transition hover:text-gray-800">
                    <x-heroicon-o-translate class="h-5 w-5" /></a>
            </li>
            @guest
            @if (Route::is('register'))
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('login') }}" class="text-gray-600 hover:underline">Se connecter</a>
            </div>
            @elseif(Route::is('login'))
            <!-- Go to register -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('register') }}" class="text-gray-600 hover:underline">S'inscrire</a>
            </div>
            @else
            <div class="flex">
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <a href="{{ route('login') }}" class="text-gray-600 hover:underline">Se connecter</a>
                </div>
                <!-- Go to register -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <a href="{{ route('register') }}" class="text-gray-600 hover:underline">S'inscrire</a>
                </div>
            </div>
            @endif
            @endguest

            @auth
            <!-- Dropdown Nav Settings -->
            <div @click.away="openDropdown = false" class="text-gray-500 relative">
                <div @click="openDropdown = ! openDropdown">
                    <a href="javascript:void(0)">
                        <img class="h-8 w-8 rounded-full"
                            src="{{ is_null(auth()->user()->getFirstMedia('avatars')) ? '/images/no-image-user.jpg' : auth()->user()->getFirstMedia('avatars')->getUrl() }}"
                            alt="">
                    </a>
                </div>

                <div x-show="openDropdown" x-cloak>
                    <div
                        class="origin-top-right z-30 absolute border border-gray-100 right-0 mt-2 w-52 rounded-md shadow-lg">
                        <div class="py-1 rounded-md bg-white shadow-xs">
                            <p class="inline-flex px-4 py-2 italic font-serif text-blue-600 text-center">
                                {{ auth()->user()->name }}
                            </p>
                            <hr class="mt-1 mb-1">
                            <a class="flex px-4 py-2 text-sm space-x-2 leading-4 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                href="{{ route('home') }}">
                                <span class="mr-2">
                                    <x-heroicon-s-home class="h-4 w-4" />
                                </span> Home </a>
                            <hr class="mt-1 mb-1">
                            <a class="flex px-4 py-2 text-sm leading-4 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                href="{{ route('user.my_space') }}">
                                <span class="mr-2">
                                    <x-heroicon-s-user-group class="h-4 w-4" />
                                </span> Mon espace</a>
                            <a class="flex px-4 py-2 text-sm leading-4 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                href="{{ route('user.settings.index') }}">
                                <span class="mr-2">
                                    <x-heroicon-s-cog class="h-4 w-4" />
                                </span> Paramètre</a>

                            <div class="mt-1 space-y-1">
                                <!-- Log out -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Déconnexion') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endauth

        </ul>

        <!-- Mobile nav menu -->
        <div class="flex items-center md:hidden">
            <button
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg :class="{ 'block': ! open, 'hidden': open }" class="block h-6 w-6" stroke="currentColor"
                    fill="none" viewBox="0 0 24 24" @click="open = true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg :class="{ 'block': open, 'hidden': ! open }" class="hidden h-6 w-6" stroke="currentColor"
                    fill="none" viewBox="0 0 24 24" @click="open = false">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

    </div>

    <div class="md:hidden absolute z-30 bg-white right-0 transition duration-150 border border-gray-200 rounded-lg shadow-lg"
        x-show="open" @click.away="open = false" x-cloak>
        <div class="pt-2 pb-0 lg:pb-3 tracking-normal">
            <a href="{{ route('front.index') }}"
                class="block pl-3 pr-4 py-2 border-l-4 text-sm font-medium focus:outline-none transition duration-150 ease-in-out text-gray-500 hover:text-gray-700 hover:bg-gray-200">
                Home
            </a>
            <a href="{{ route('front.contact') }}"
                class="block pl-3 pr-4 py-2 border-l-4 text-sm font-medium focus:outline-none transition duration-150 ease-in-out text-gray-500 hover:text-gray-700 hover:bg-gray-200">
                Contact
            </a>
            {{-- <a href=""
                class="block pl-3 pr-4 py-2 border-l-4 text-sm font-medium focus:outline-none transition duration-150 ease-in-out text-gray-500 hover:text-gray-700 hover:bg-gray-200">
                About
            </a> --}}
            <a href="{{ route('front.community') }}"
                class="block pl-3 pr-4 py-2 border-l-4 text-sm font-medium focus:outline-none transition duration-150 ease-in-out text-gray-500 hover:text-gray-700 hover:bg-gray-200">
                Communauté
            </a>
            <a href="javascript:void(0)" @click.prevent="isOpenChangeLocalizationModal = true"
                class="mt-1 mb-1 block pl-3 pr-4 py-2 border-l-4 text-sm font-medium transition duration-150 ease-in-out text-gray-500 hover:text-gray-700 hover:bg-gray-200">
                <x-heroicon-o-translate class="h-6 w-6" />
            </a>

            @guest
            @if (Route::is('register'))
            <div class="sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('login') }}" class="text-gray-600 hover:underline">Se connecter</a>
            </div>
            @elseif(Route::is('login'))
            <!-- Go to register -->
            <div class="sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('register') }}" class="text-gray-600 hover:underline">S'inscrire</a>
            </div>
            @else
            <div class="">
                <div class="sm:flex sm:items-center sm:ml-6">
                    <a href="{{ route('login') }}" class="text-gray-600 hover:underline">Se connecter</a>
                </div>
                <!-- Go to register -->
                <div class="sm:flex sm:items-center sm:ml-6">
                    <a href="{{ route('register') }}" class="text-gray-600 hover:underline">S'inscrire</a>
                </div>
            </div>
            @endif
            @endguest

            @auth
            <div class="mt-3"></div>
            <div class="pt-3 pb-3 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full cursor-pointer"
                            src="{{ is_null(auth()->user()->getFirstMedia('avatars')) ? '/images/no-image-user.jpg' : auth()->user()->getFirstMedia('avatars')->getUrl() }}"
                            alt="">
                    </div>
                    <div class="ml-2">
                        <div class="text-sm font-medium leading-6 text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="text-sm font-medium leading-5 text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
            </div>
            <hr class="mt-3 mb-1">
            <div>
                <div class="mt-1 space-y-1">
                    <!-- Log out -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                            {{ __('Déconnexion') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
            @endauth

        </div>
    </div>

    @include('front.modals.localization')

</nav>

{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100"> --}}
<!-- Primary Navigation Menu -->
{{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
<x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
</a>
</div>

<!-- Navigation Links -->
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <div
        class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-lg font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
        <a href="/" class="italic">xChange-forum</a>
    </div>
</div>
</div>

<!-- Settings Dropdown -->
<div class="hidden sm:flex sm:items-center sm:ml-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">

            <button
                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">

                <!-- Avatar -->
                <div>
                    <img src="{{ is_null(auth()->user()->getFirstMedia('avatars')) ? '/images/no-image-user.jpg' : auth()->user()->getFirstMedia('avatars')->getUrl() }}"
                        class="h-8 w-8 rounded-full" alt="" srcset="">
                </div>

            </button>
        </x-slot>

        <x-slot name="content">
            <div class="px-4 text-base text-gray-400 italic divide-y-2">
                {{ Auth::user()->name }}
            </div>

            <ul class="px-4 text-base text-gray-700">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="">Mon espace</a>
                </li>
                <li>
                    <a href="{{ route('user.settings.index') }}">Paramètres</a>
                </li>
            </ul>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>

<!-- Hamburger -->
<div class="-mr-2 flex items-center sm:hidden">
    <button @click="open = ! open"
        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>
</div>
</div> --}}

<!-- Responsive Navigation Menu -->
{{-- <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('home') }}
</x-responsive-nav-link>
</div>

<!-- Responsive Settings Options -->
<div class="pt-4 pb-1 border-t border-gray-200">
    <div class="flex items-center px-4">
        <div class="flex-shrink-0">
            <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </div>

        <div class="ml-3">
            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        </div>
    </div>

    <div class="mt-3 space-y-1">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                {{ __('Log out') }}
            </x-responsive-nav-link>
        </form>
    </div>
</div>
</div> --}}
{{-- </nav> --}}