<footer class="bg-white border-t py-0 mt-16">

    <div class="text-white bg-gray-500 text-base px-10">
        <ul class="mx-5 py-4 space-y-2">
            <li class="">
                <a href="{{ route('front.index') }}" class="hover:underline">
                    <span class="">
                        <x-heroicon-o-chevron-right class="h-3 w-3 inline-flex" />
                    </span>Home
                </a>
            </li>
            <li><a class="" href="{{ route('front.contact') }}">
                    <span class="">
                        <x-heroicon-o-chevron-right class="h-3 w-3 inline-flex" /></span>Contact</a></li>
            <li><a class="" href="{{ route('front.community') }}"><span class="">
                        <x-heroicon-o-chevron-right class="h-3 w-3 inline-flex" /></span>Communauté</a></li>
            <li><a class="" href="{{ route('front.policy') }}"><span class="">
                        <x-heroicon-o-chevron-right class="h-3 w-3 inline-flex" /></span>Politique - Confidencialité</a>
            </li>
        </ul>
    </div>

    <div class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto text-sm font-bold text-white text-center py-5 bg-gray-600">
        © Copyright {{ env('APP_NAME') }} {{ date('Y') }}. All rights reserved.<br>
        Designed by <a href="http://romaric.carrd.co" target="_blank" rel="noopener noreferrer">Romaric G.</a>
    </div>

</footer>