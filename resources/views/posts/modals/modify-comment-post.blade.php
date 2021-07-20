<div class="fixed z-30 inset-0 overflow-y-auto" x-show="isOpenModalModifyComment"
    @modify-post-comment.window="openModalModifyComment($event.detail.url, $event.detail.content)" x-cloak>

    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div x-show="isOpenModalModifyComment" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity" aria-hidden="true" x-cloak>
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div x-show="isOpenModalModifyComment" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            @click.away="closeModalModifyComment" @keydown.escape="closeModalModifyComment"
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline" x-cloak>
            <div class="bg-white px-3 py-3">
                <div class="sm:flex sm:items-start">
                    <div
                        class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 sm:h-12 sm:w-12">
                        <span class="h-8 w-8 text-blue-700 text-4xl text-center">
                            <x-heroicon-o-pencil-alt class="h-8 w-8" />
                        </span>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg leading-6 font-medium text-gray-700">Modifier mon commentaire</h3>
                        </div>

                        <div class="mt-5">
                            <form action="" method="POST" class="w-full" id="modifyCommentForm">
                                @csrf
                                <div class="mt-3">
                                    <div class="rounded-md shadow-sm">
                                        <textarea name="content" id="" cols="30" rows="5"
                                            placeholder="Le contenu de votre commentaire"
                                            class="appearance-none block w-full px-3 py-2 border border-gray-300 font-medium rounded-md placeholder-gray-400 focus:outline-none focus:border-blue-500 transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            {{-- Button submit and reset --}}
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="submit" @click.prevent="modifyComment" id="modifyCommentAction"
                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">
                    Modifier commentaire
                </button>
                <button type="button" @click.prevent="closeModalModifyComment"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Annuler
                </button>
            </div>
        </div>

    </div>

</div>