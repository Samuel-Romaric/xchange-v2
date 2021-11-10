<nav class="bg-gray-100 border border-b-4">
    <!-- Guest mavigation menu -->
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

        <div class="flex justify-between h-16">

            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Go to home page -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <div
                        class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-lg font-medium leading-5 text-gray-600 hover:text-gray-800 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <a href="/" class="italic">xChange-forum</a>
                    </div>
                </div>
            </div>

            @if (Route::is('register'))
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('login') }}" class="text-gray-600 hover:underline">Se connecter</a>
            </div>
            @else
            <!-- Go to register -->
            <div class="hidden sm:flex sm:items-center sm:ml-6 items-center">
                <a href="{{ route('register') }}"
                    class="text-gray-600 hover:bg-white hover:text-blue-800 bg-black">S'inscrire</a>
            </div>
            @endif

        </div>
    </div>
</nav>