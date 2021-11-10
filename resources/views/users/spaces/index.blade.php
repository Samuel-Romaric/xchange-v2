@extends('layouts.app')

@section('title', ' | '. auth()->user()->name)

@section('content')

<main x-data="data()">

    <section class="mt-5 mb-7">

        <div class="max-w-7xl px-4 mx-auto sm:px-6 lg:px-12">
            <div class="flex flex-col space-y-3 sm:space-y-0 sm:flex-row sm:justify-between items-center">
                <div class="inline-flex items-center space-x-3">
                    @include('posts.partials.breadcrumb', ['title' => 'Mon space'])

                    {{-- <div
                        class="font-sans text-white text-sm mx-2 inline-flex h-7 px-2 rounded-3xl items-center bg-blue-500 border-2 border-white hover:bg-blue-700 transition duration-150">
                        <a href="javascript:void(0)" class="">
                            <span class="bg-white text-red-600 mx-1 px-1 py-0 rounded-full">{{ $myPostNb }}</span> -
                    Publications
                    </a>
                </div> --}}
            </div>

            <div class="inline-flex space-x-4">
                {{-- <button @click.prevent="toggleFilter"
                        class="px-2 text-gray-500 bg-gray-100 rounded-md border border-gray-300 font-medium text-sm inline-flex space-x-2 items-center"
                        style="outline: none;">
                        <span class="h-5 w-auto">
                            <x-heroicon-o-adjustments class="h-4 w-4" />
                        </span>
                        <span>Filter</span>
                    </button> --}}
                <a href="javascript:void(0)" @click="openModalAddPost()"
                    class="px-2 bg-blue-500 py-2 text-white hover:bg-blue-700 rounded-lg text-sm inline-flex space-x-2 items-center">
                    <span class="text-lg mr-1">
                        <x-heroicon-o-document-add class="h-5 w-5" /></span> {{ __('post-index.publi') }}
                </a>
            </div>

        </div>
        {{-- <div id="filter-content" style="display: none">
                <livewire:posts.filter />
            </div> --}}
        </div>

    </section>

    <section class="mb-5 sm:px-1">
        <div class="max-w-7xl mx-auto px-8 sm:px-6 lg:px-12">
            @if ($myPostNb > 0)
            <livewire:user.index />
            @else
            <div class="mb-20 py-8 text-md font-medium flex flex-col items-center justify-center h-72">
                <x-heroicon-o-document-text class="h-10 w-10 text-gray-400" />
                <p class="text-gray-500">
                    Aucune publication trouvée!
                </p>
            </div>
            @endif
        </div>
    </section>

    @include('users.spaces.modals.add-post')
    @include('users.spaces.modals.modify-post')
    @include('users.spaces.modals.delete-post')

</main>

@endsection


@section('script')

<script>
    $('#hasIllustration').on('click', function () {
        if ($(this).is(':checked')) {
            $('#addIllustration').slideToggle(300);
        } else {
            $('#addIllustration').slideToggle(300);
        }
    });
</script>

<script>
    function data() {
        return {
            tooltip: 0,
            toggleFilter() {
                $("#filter-content").slideToggle(300);
            },
            // Modal add post
            isOpenModalAddPost: false,
            openModalAddPost() {
                this.isOpenModalAddPost = true;
            },
            postPublished() {
                $("#addPostForm").submit();
                $("#addPostAction").attr("disabled", "disabled");
                $("#addPostAction").addClass("opacity-75 pointer-events-none");
                console.log("Post published");
            },
            closeModalAddPost() {
                this.isOpenModalAddPost = false;
            },
            // Modal modify post
            isOpenModalModifyPost: false,
            openModalModifyPost(url, title, content) {
                $("#modifyPostForm").attr("action", url);
                $("#modifyPostForm [name='title']").val(title);
                $("#modifyPostForm [name='content']").val(content);
                this.isOpenModalModifyPost = true;
                console.log("Ok !");
            },
            modifyPost() {
                $("#modifyPostForm").submit();
                $("#modifyPostAction").attr("disabled", "disabled");
                $("#modifyPostAction").addClass("opacity-75 pointer-events-none");
            },
            closeModalModifyPost() {
                this.isOpenModalModifyPost = false;
            },
            // Modal delete post
            isOpenModalDeletePost: false,
            openModalDeletePost(url, title) {
                // console.log(url, title);
                $("#deletePostForm").attr("action", url);
                $("#deletePostForm .iName").html(title);
                this.isOpenModalDeletePost = true;
            },
            deletePost() {
                $("#deletePostForm").submit();
                $("#deletePostAction").attr("disabled", "disabled");
                $("#deletePostAction").addClass("opacity-75 pointer-events-none");
            },
            closeModalDeletePost() {
                this.isOpenModalDeletePost = false;
            },
        }
    }
</script>
@endsection