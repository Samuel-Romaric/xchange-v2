@extends('layouts.app')

@section('title', ' | '.$post->title)

@section('css')
<style>
    .btn-primary {
        border-radius: 0.375rem;
        --tw-bg-opacity: 1;
        background-color: rgba(0, 105, 255, var(--tw-bg-opacity));
        padding-left: 1rem;
        padding-right: 1rem;
        letter-spacing: 0em;
        --tw-text-opacity: 1;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
        transition-duration: 200ms;
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .btn-primary:hover {
        --tw-bg-opacity: 1;
        background-color: rgba(29, 78, 216, var(--tw-bg-opacity));
    }

    .btn-secondary {
        border-radius: 0.375rem;
        --tw-bg-opacity: 1;
        background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        padding-left: 1rem;
        padding-right: 1rem;
        letter-spacing: 0em;
        --tw-text-opacity: 1;
        color: rgba(107, 114, 128, var(--tw-text-opacity));
        transition-duration: 200ms;
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .btn-secondary:hover {
        --tw-bg-opacity: 1;
        background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
    }

    .btn-secondary:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .btn-secondary:focus {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    }

    .btn-secondary:focus {
        transition-duration: 200ms;
    }
</style>
@endsection

@section('content')

<main x-data="data()">

    <section class="mt-5 mb-7">
        <div>
            <div class="flex flex-col space-y-3 sm:space-y-0 sm:flex-row sm:justify-between items-center px-10">
                <div class="inline-flex items-center space-x-3">
                    @include('posts.partials.breadcrumb', ['title' => 'Mon space - ' . \Str::ucfirst($post->title)])
                    {{-- <h2 class="font-semibold text-base">
                        Posts
                    </h2>
                    <span
                        class="text-sm font-semibold text-gray-700 bg-gray-100 border border-gray-200 py-1 px-3 rounded-lg">{{ $postNb }}
                    </span> --}}
                </div>

                <div class="inline-flex space-x-4">
                    <a href="javascript:void(0)" @click="openModalAddPost()"
                        class="px-2 bg-blue-500 py-2 text-white hover:bg-blue-700 rounded-lg text-sm inline-flex space-x-2 items-center">
                        <span class="text-lg mr-1">
                            <x-heroicon-o-document-add class="h-5 w-5" /></span> Publier
                    </a>
                </div>

            </div>
            <livewire:user.show :post="$post" :postComments="$postComments" />
        </div>

    </section>

    {{-- Post modal --}}
    @include('posts.modals.add-post')
    @include('posts.modals.modify-post')
    @include('posts.modals.delete-post')

    {{-- Comment modal --}}
    @include('posts.modals.delete-comment')
    @include('posts.modals.modify-comment-post')
    @include('posts.modals.show-illustration')

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

            toggleComment() {
                $("#comment").slideToggle(300);
                // $("#a").next(
                //     $("#comment").slideToggle(300),
                // );
                // $("#comment").slideToggle(300);
                // $("#comment").each(function () {
                    // $(this).slideToggle(300);
                // });
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
            // Modify post comment
            isOpenModalModifyComment: false,
            openModalModifyComment(url, content) {
                $("#modifyCommentForm").attr("action", url);
                $("#modifyCommentForm [name='content']").val(content);
                this.isOpenModalModifyComment = true;
            },
            modifyComment() {
                $("#modifyCommentForm").submit();
                $("modifyCommentAction").attr("disabled", "disabled");
                $("modifyCommentAtion").addClass("opacity-75 pointer-events-none");
            },
            closeModalModifyComment() {
                this.isOpenModalModifyComment = false;
            },
            // Delete commentaire
            isOpenModalDeleteComment: false,
            openModalDeleteComment(url, commentContent) {
                $("#deleteCommentForm").attr("action", url);
                $("#deleteCommentForm .iName").html(commentContent);
                this.isOpenModalDeleteComment = true;
            },
            deleteComment() {
                $("#deleteCommentForm").submit();
                $("#deleteCommentAction").attr("disabled", "disabled");
                $("#deleteCommentAction").addClass("opacity-75 pointer-events-none");
            },
            closeModalDeleteComment() {
                this.isOpenModalDeleteComment = false;
            },
            // Show illustration image
            isOpenModalShowIllustration: false,
            openShowIllustration() {
                this.isOpenModalShowIllustration = true;
            },
            closeModalShowIllustration() {
                this.isOpenModalShowIllustration = false;
            },
        }
    }
</script>
@endsection