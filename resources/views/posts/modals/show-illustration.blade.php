<div class="fixed z-30 inset-0 overflow-y-auto" x-show="isOpenModalShowIllustration" x-cloak>

    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div x-show="isOpenModalShowIllustration" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity" aria-hidden="true" x-cloak>
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div x-show="isOpenModalShowIllustration" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            @click.away="closeModalShowIllustration" @keydown.escape="closeModalShowIllustration"
            class="inline-block align-bottom bg-white rounded-lg text-center overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline" style="min-width: 90%; min-height: 80%"
            x-cloak>
            <div class="bg-white px-2 py-2" style="">

                <div class="rounded-full relative z-30 top-0">
                    <a href="javascript:void(0)" @click.prevent="closeModalShowIllustration">
                        <span class="h-6 w-6 text-black duration-200 transition text-md text-center">
                            <x-heroicon-o-x class="h-4 w-4" />
                        </span>
                    </a>
                </div>

                <div class="sm:flex sm:items-start sm:overscroll-x-auto">
                    <div class="mt-3 items-center sm:mt-0 sm:ml-4 sm:text-left">
                        <img src="{{ is_null($post->getFirstMedia('illustrations')) ? asset('/images/no-training-cover.png') : $post->getFirstMedia('illustrations')->getUrl() }}"
                            alt="post-illustration" style="max-width: 100%; max-height:100%;">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>