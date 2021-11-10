<div class="mx-0 sm:mx-0 border border-gray-100 rounded-md">

    <div class="mt-2 text-gray-500 font-serif">
        @if ($search != "")
        @if ($posts->total() != 0)
        Nombre de resultat trouvé : <span class="font-bold"> {{ $posts->total() }} </span>
        @endif
        @endif
    </div>

    <section class="py-5 sm:flex-row">
        <div class="max-w-7xl px-4 sm:px-2 lg:px-12 mx-auto space-y-7">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-2 lg:gap-8">
                @forelse ($posts as $post)
                <div
                    class="card border border-gray-400 bg-white rounded-2xl transition duration-150 shadow-md hover:shadow-2xl">
                    <div class="card-header rounded-t-lg px-2">

                        <div class="flex space-x-6 items-center bg-gray-50">
                            <div class="flex flex-col -space-y-1">

                                <div
                                    class="py-3 flex items-center lg:items-start flex-col lg:flex-row lg:justify-between">
                                    <div
                                        class="flex flex-col lg:flex-row items-center lg:items-start space-y-3 space-x-0 lg:space-y-0 lg:space-x-5">
                                        <div class="post-cover flex justify-center lg:flex-shrink-0">
                                            <a class="block duration-500 hover:shadow"
                                                href="{{ route('post.show', $post->id) }}">
                                                <img src="{{ is_null($post->getFirstMedia('illustrations')) ? asset('/images/no-training-cover.png') : $post->getFirstMedia('illustrations')->getUrl() }}"
                                                    alt="post-illustration" style="max-height: 160px;">
                                            </a>
                                        </div>
                                        <div class="text-center lg:text-left">

                                            <h1
                                                class="text-lg font-semibold hover:underline text-gray-800 leading-6 lg:leading-6 mb-3 lg:mb-3">
                                                <a class="text-gray-700 hover:text-blue-700"
                                                    href="{{ route('post.show', $post->id) }}">
                                                    {{ \Str::ucfirst($post->title) }}
                                                </a>
                                            </h1>
                                            <p class="text-sm leading-normal text-justify text-gray-600 mb-3 lg:mb-3"
                                                style="margin-top: -4px;">
                                                {{ \Str::limit(ucfirst($post->content), 700) }}
                                            </p>

                                        </div>
                                    </div>

                                    <div
                                        class="flex flex-col overflow-hidden items-center lg:flex-row lg:items-center space-y-2 space-x-0 lg:space-y-0 lg:space-x-4">
                                        <div class="flex -space-x-6">

                                            <div class="absolute right-20" style="z-index: 4;">
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
                                                                class="text-sm px-5 hover:bg-gray-200 transition duration-100">
                                                                <a href="{{ route('post.show', $post->id) }}"
                                                                    class="text-gray-500 hover:text-gray-800 transition duration-100 block">
                                                                    Voir
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="text-sm px-5 hover:bg-gray-200 transition duration-100">
                                                                <a href="{{ route('post.show', $post->id) }}"
                                                                    class="text-gray-500 hover:text-gray-800 transition duration-100 block">
                                                                    Signaler
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="text-sm text-gray-800 px-5 hover:bg-gray-200 transition duration-100">
                                                                <a href="javascript:void(0)"
                                                                    wire:click.prevent="openModalEditPost(`{{ route('post.update', $post->id) }}`, `{{ $post->id }}`)"
                                                                    class="text-green-500 hover:text-green-700 duration-100 block"
                                                                    @click="isOpen=false">
                                                                    Modifier
                                                                </a>
                                                            </li>
                                                            <li
                                                                class="text-sm text-gray-800 px-5 hover:bg-gray-200 transition duration-100">
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

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="py-2 px-4 rounded-b-lg">
                        <div
                            class="flex flex-col sm:flex-row sm:text-center justify-between space-x-4 bg-gray-100 border border-gray-300">
                            <div
                                class="flex flex-col items-center lg:flex-row lg:items-center space-y-2 space-x-0 lg:space-y-0 lg:space-x-4">
                                <div class="flex -space-x-6">

                                    <div class="relative" style="z-index: 3;">

                                        <!-- Infomation of the user make post -->

                                        <img x-on:mouseover="tooltip = 1" x-on:mouseleave="tooltip = 0"
                                            class="h-10 lg:h-11 w-10 lg:w-11 cursor-pointer rounded-full border-2 border-white"
                                            src="{{ is_null($post->user->getFirstMedia('avatars')) ? asset('/images/no-image-user.jpg') : $post->user->getFirstMedia('avatars')->getUrl() }}"
                                            alt="profil">
                                    </div>

                                </div>

                                <p class="italic text-gray-500 font-medium text-xs">
                                    {{ __('Publié ') }}
                                    {{ $post->created_at->locale('Fr')->calendar() }}
                                    {{ __('. Dernière modification le ') }}
                                    {{ $post->updated_at->locale('Fr')->isoFormat('D MMM Y HH:mm') .' GMT+'. $post->updated_at->setTimezone('Africa/Abidjan')->utcOffset() / 60  }}
                                </p>

                            </div>

                            <div class="flex py-1 space-x-2">
                                <div class="px-2 bg-gray-200 rounded-2xl border border-gray-200">
                                    <a href="{{ route('post.show', $post->id) }}"
                                        class="text-blue-500 hover:text-blue-700 px-2 py-1 duration-100 inline-flex relative"
                                        style="outline: none;">
                                        <x-heroicon-o-chat-alt class="h-6 w-6" /> <span
                                            class="text-blue-700 rounded text-xs px-1 py-1">
                                            @if ($post->getCommentsNumber() > 0)
                                            {{ $post->getCommentsNumber() }}
                                            @endif
                                        </span>
                                    </a>
                                </div>
                                <div class="px-2 py-2 bg-gray-200 rounded-2xl border border-gray-200">
                                    <a href="" class="text-red-500 hover:text-red-700 duration-100">
                                        <x-heroicon-o-thumb-down class="h-5 w-5" />
                                    </a>
                                </div>
                                <div class="px-2 py-2 bg-gray-200 rounded-2xl border border-gray-200">
                                    <a href="" class="text-blue-500 hover:text-blue-700 duration-100">
                                        <x-heroicon-o-thumb-up class="h-5 w-5" />
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                @empty

                <div class="mb-20 py-8 text-sm font-medium flex flex-col items-center justify-center h-72">
                    <x-heroicon-o-emoji-sad class=" h-14 w-14 text-gray-600" />
                    <p class="text-gray-500">
                        Désolé ! Nous n'avons pas trouvé <span class="text-black">" {{ $search }} "</span>
                    </p>
                </div>

                @endforelse
            </div>
        </div>
    </section>


    @if ($posts->hasPages())
    <div class="flex items-center justify-between mt-4">
        <div>
            <p class="text-sm text-gray-700 leading-5">
                {!! __('Affichage de') !!}
                <span class="font-medium">{{ $posts->firstItem() }}</span>
                {!! __('à') !!}
                <span class="font-medium">{{ $posts->lastItem() }}</span>
                {!! _('sur') !!}
                <span class="font-medium">{{ $posts->total() }}</span>
            </p>
        </div>

        {{ $posts->links('vendor.pagination.tailwind-default') }}
    </div>
    @endif


</div>