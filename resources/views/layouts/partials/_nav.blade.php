<!-- Second navbar -->
<nav class="bg-white border border-gray-300 shadow-lg px-10 items-center">
    <div class="flex justify-between">
        <ul class="inline-flex space-x-3 py-1 px-0 font-light text-blue-700">
            <li class="px-2 py-0 {{ persist_active('home', 'post.show') }}">
                <a href="{{ route('home') }}" class="inline-flex py-1 items-center space-y-0 space-x-2">
                    <span>
                        <x-heroicon-o-home class="h-5 w-5" />
                    </span> Accueil
                </a>
            </li>
            <li class="px-2 py-0 {{ persist_active('user.my_space', 'user.post.show') }}">
                <a href="{{ route('user.my_space') }}" class="inline-flex py-1 items-center">
                    <span class="">
                        <x-heroicon-o-user class="h-5 w-5" />
                    </span> Mon profile
                </a>
            </li>
            {{-- <li class="px-2 py-1">
                <a href="{{ route('notifications') }}" class="inline-flex ">
            <span>
                <x-heroicon-o-bell class="h-5 w-5" />
            </span> Notification
            </a>
            </li> --}}
        </ul>
        {{-- <div class="py-2 ml-2">
            <ul>
                <li class="bg-blue-600 px-1 py-1 rounded-full mr-4">
                    <a href="" class="text-white">
                        <span>
                            <x-heroicon-s-question-mark-circle class="h-5 w-5" /></span>
                    </a>
                </li>
            </ul>
        </div> --}}
    </div>
</nav>