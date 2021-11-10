<div class="mb-5 mt-5">
    <p class="hidden">
        - Le coeur plein d'émotion et loin de la confusion, je suis une prediction.
        - Je suis le voilier et toi le vent: emmène-moi !
        - Je suis un mistère dont j'ignore les secrets.
    </p>

    <section class="mt-5">
        <div class="max-w-7xl px-0 sm:px-6 lg:px-12 mx-auto">

            <div class="grid grid-cols-1 lg:grid-cols-1 gap-4 lg:gap-8 md:mx-44">
                <div
                    class="card border border-gray-400 bg-white rounded-lg md:px-2 sm:px-1 transition duration-300 shadow-md hover:shadow-2xl">
                    <div class="header rounded-t-lg px-4 bg-white py-5 mt-5">
                        <div class="flex space-x-6 items-center">

                            <div class="flex flex-col -space-y-1">

                                <div class="flex -space-x-6">

                                    <div class="relative" style="z-index: 3;">
                                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip == 1">
                                            <div class="absolute top-0 z-10 w-52 p-2 -mr-30 -mt-2 text-xs leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-blue-500 rounded-lg shadow-lg"
                                                style="right: -190px;">
                                                {{ $post->user->name }}
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-blue-500 transform -translate-x-12 -translate-y-4 fill-current stroke-current"
                                                width="8" height="8" style="right: -38px;">
                                                <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                        <div>
                                            <img x-on:mouseover="tooltip = 1" x-on:mouseleave="tooltip = 0"
                                                class="h-10 lg:h-11 w-10 lg:w-11 cursor-pointer rounded-full border-2 border-white"
                                                src="{{ is_null($post->user->getFirstMedia('avatars')) ? asset('/images/no-image-user.jpg') : $post->user->getFirstMedia('avatars')->getUrl() }}"
                                                alt="profil">
                                        </div>
                                    </div>

                                    <div>
                                        <h1
                                            class="font-medium ml-8 hover:underline duration-150 transition text-gray-800 tracking-tight text-lg">
                                            {{ \Str::ucfirst($post->title) }}
                                        </h1>
                                        <p class="text-gray-500 ml-8 text-xs italic font-serif">
                                            {{-- <span class="inline-flex">
                                                <x-heroicon-o-clock class="h-5 w-5" />
                                            </span> --}}
                                            {{ $post->created_at->locale($post->user->lang)->calendar() }}
                                        </p>
                                    </div>

                                    <div class="absolute right-8 md:right-64" style="z-index: 4;">
                                        <div
                                            class="h-10 lg:h-11 w-10 lg:w-11 inline-flex items-center justify-center bg-gray-200 hover:bg-gray-300 transition duration-200 border-2 border-white rounded-full">
                                            <div x-data="{isOpen: false}" class="relative" x-cloak>
                                                <button @click="isOpen = !isOpen" style="outline:none">
                                                    <x-heroicon-o-dots-vertical class="h-5 w-5 text-gray-500" />
                                                </button>

                                                <ul x-show="isOpen" @click.away="isOpen = false"
                                                    class="bg-white absolute shadow-md overflow-hidden rounded w-28 border mt-0 py-2 right-0 z-30 duration-150"
                                                    x-cloak>
                                                    <li
                                                        class="text-sm text-gray-800 px-5 justify-center hover:bg-gray-200 duration-100">
                                                        <a href="javascript:void(0)"
                                                            wire:click.prevent="openModalEditPost(`{{ route('post.update', $post->id) }}`, `{{ $post->id }}`)"
                                                            class="text-green-500 hover:text-green-700 duration-100 block"
                                                            @click="isOpen=false">
                                                            Modifier
                                                        </a>
                                                    </li>
                                                    <li
                                                        class="text-sm text-gray-800 px-5 justify-center hover:bg-gray-200 duration-100">
                                                        <a href="javascript:void(0)"
                                                            wire:click.prevent="openModalDeletePost(`{{ route('post.delete', $post->id) }}`, `{{ $post->title}}`)"
                                                            class="text-red-500 hover:text-red-700 duration-100 block"
                                                            @click="isOpen=false">
                                                            Supprimer
                                                        </a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="pt-2">

                                    <a href="javascript:void(0)" @click="openShowIllustration">
                                        <img src="{{ is_null($post->getFirstMedia('illustrations')) ? asset('/images/no-training-cover.png') : $post->getFirstMedia('illustrations')->getUrl() }}"
                                            alt="post-illustration" style="max-height: 500px;">
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card-footer border border-gray-300 mb-1 bg-gray-50 px-4 py-4 rounded-b-lg">
                        <p class="text-lg font-serif leading-normal text-gray-700 mb-3 lg:mb-3"
                            style="margin-top: -4px;">
                            {{ \Str::ucfirst($post->content) }}
                        </p>
                    </div>

                    <div class="flex justify-between space-x-4 bg-white border border-gray-200 rounded-md">
                        <div>
                            <div
                                class="flex flex-col items-center lg:flex-row lg:items-center space-y-2 space-x-0 lg:space-y-0 lg:space-x-4">

                                <p class="italic text-gray-500 font-medium text-xs py-4">
                                    {{ __('Dernière modification le ') }}
                                    {{ $post->updated_at->locale($post->user->lang)->isoFormat('D MMM Y à HH:mm')  }}
                                </p>

                            </div>
                        </div>

                        <div class="flex py-1 space-x-3">
                            <div
                                class="bg-gray-100 rounded-2xl border border-gray-200 hover:bg-blue-100 duration-150 transition">
                                <button @click.prevent="toggleComment"
                                    class="text-blue-500 hover:text-blue-700 px-2 py-1 duration-100 inline-flex"
                                    style="outline: 2px solid transparent; outline-offset: 2px;">
                                    <x-heroicon-o-chat-alt-2 class="h-6 w-6" /> <span
                                        class="text-blue-700 rounded text-xs px-1 py-1">{{ $post->getCommentsNumber() }}</span>
                                </button>
                            </div>
                            {{-- <div class="px-2 py-2 bg-gray-100 rounded-2xl border border-gray-200">
                                <a href="" class="text-blue-500 hover:text-blue-700">
                                    <x-heroicon-s-thumb-up class="h-5 w-5" />
                                </a>
                            </div>
                            <div
                                class="px-2 py-2 bg-gray-100 rounded-2xl border border-gray-200 hover:bg-red-100 duration-150 transition">
                                <a href="" class="text-red-400 hover:text-red-700 duration-100">
                                    <x-heroicon-s-thumb-down class="h-5 w-5" />
                                </a>
                            </div> --}}
                        </div>
                    </div>

                    <div>
                        @forelse ($postComments as $postComment)
                        <div class="flex py-4 space-x-1 bg-gray-50 justify-between">
                            <div class="md:inline-flex sm:inline-table sm:items-center">

                                <div class="flex -space-x-6">

                                    <div class="relative" style="z-index: 3;">
                                        <div class="relative" x-cloak
                                            x-show.transition.origin.top="tooltip == {{ $postComment->id }}">
                                            <div class="absolute top-0 z-10 w-52 p-2 -mr-30 -mt-2 text-xs leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-blue-500 rounded-lg shadow-lg"
                                                style="right: -190px;">
                                                {{ $postComment->user->name }}
                                            </div>
                                            <svg class="absolute z-10 w-6 h-6 text-blue-500 transform -translate-x-12 -translate-y-4 fill-current stroke-current"
                                                width="8" height="8" style="right: -38px;">
                                                <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                                            </svg>
                                        </div>
                                        <img x-on:mouseover="tooltip = {{ $postComment->id }}"
                                            x-on:mouseleave="tooltip = 0"
                                            class="h-10 lg:h-11 w-10 lg:w-11 cursor-pointer rounded-full border-2 border-white"
                                            src="{{ is_null($postComment->user->getFirstMedia('avatars')) ? asset('/images/no-image-user.jpg') : $postComment->user->getFirstMedia('avatars')->getUrl() }}"
                                            alt="profil">
                                    </div>

                                </div>

                                <div class="">
                                    <p
                                        class="text-md font-serif text-gray-700 bg-white border border-gray-300 rounded-3xl py-2 px-2 hover:shadow-lg hover:bg-gray-200 transition duration-150">
                                        {{ \Str::ucfirst($postComment->content) }}
                                        <br>
                                        <span class="text-xs text-gray-500 italic flex hover:text-gray-600">
                                            {{ $postComment->created_at->locale($post->user->lang)->diffForHumans() }}
                                            {{-- <span class="inline-flex ml-3 space-x-2">
                                                <span class="text-blue-500">
                                                    <x-heroicon-o-thumb-up class="h-5 w-5" />
                                                </span>
                                                <span class="text-red-500">
                                                    <x-heroicon-o-thumb-down class="h-5 w-5" />
                                                </span>
                                            </span> --}}
                                        </span>
                                    </p>
                                </div>

                            </div>
                            <div x-data="{isOpen: false}" class="relative" x-cloak>
                                <button @click="isOpen = !isOpen" style="outline:none">
                                    <x-heroicon-o-dots-vertical class="h-5 w-5 cursor-pointer" />
                                </button>

                                <ul x-show="isOpen" @click.away="isOpen = false"
                                    class="bg-white absolute shadow-md overflow-hidden rounded w-28 border border-gray-200 mt-0 py-2 right-0 z-30 duration-150"
                                    x-cloak>
                                    <li
                                        class="text-sm text-gray-800 px-5 justify-center hover:bg-gray-200 duration-100">
                                        <a href="javascript:void(0)" class="text-green-500 hover:text-green-700"
                                            wire:click.prevent="openModalModifyPostComment(`{{ route('comment.update', $postComment->id) }}`, `{{ $postComment->id }}`)"
                                            class="" @click="isOpen=false">
                                            Modifier
                                        </a>
                                    </li>
                                    <li
                                        class="text-sm text-gray-800 px-5 justify-center hover:bg-gray-200 duration-100">
                                        <a href="javascript:void(0)" class="text-red-500"
                                            wire:click.prevent="openModalDeletePostComment(`{{ route('comment.delete', $postComment->id) }}`, `{{ \Str::limit($postComment->content, 10) }}`)"
                                            @click="isOpen=false">
                                            Supprimer
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        @empty
                        <div class="text-center text-gray-400 italic font-medium hover:text-gray-600 py-2">
                            <center>
                                <x-heroicon-o-annotation class="h-6 w-6" />
                            </center>
                            <p class="text-center justify-center items-center">
                                Aucun commentaire
                            </p>
                        </div>
                        @endforelse
                    </div>

                    <div class="flex mb-4 flex-col items-center lg:flex-row lg:items-center space-y-2 space-x-0 lg:space-y-0 lg:space-x-4 mt-5"
                        id="comment" style="display: none">

                        <div
                            class="bg-gray-200 w-full px-2 py-5 md:inline-block lg:inline-flex sm:justify-center space-x-2">
                            <div class="flex -space-x-6">

                                <div class="relative" style="z-index: 3;">
                                    <img class="h-10 lg:h-11 w-10 lg:w-11 cursor-pointer rounded-full border-2 border-white"
                                        src="{{ is_null(auth()->user()->getFirstMedia('avatars')) ? asset('/images/no-image-user.jpg') : auth()->user()->getFirstMedia('avatars')->getUrl() }}"
                                        alt="profil">
                                </div>

                            </div>
                            <form action="{{ route('comment.add', $post->id) }}" method="POST" class="w-full">
                                @csrf
                                <div class="w-full">
                                    <div class="">
                                        <textarea name="content" id="" class="w-full rounded-lg focus:border-blue-500"
                                            placeholder="Ajoutez votre commentaire ici."></textarea>
                                    </div>
                                    <div class="mt-2 justify-center">
                                        <button type="submit"
                                            class="text-white w-full bg-blue-500 hover:bg-blue-700 transition duration-150 px-2 py-1 rounded-lg">Commenter</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <center class="mt-5 text-gray-400">
        *****
    </center>

</div>