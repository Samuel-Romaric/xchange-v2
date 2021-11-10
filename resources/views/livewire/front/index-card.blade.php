<div wire:init="loadCardData">

    <div class="max-w-7xl px-10 sm:px-5 lg:px-12 mt-10 mx-auto">
        <div class="mt-10 bg-white">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                @if($data === "print")
                <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                    <div class="mx-2 my-2">
                        <h1 class="text-base font-bold inline-flex">
                            <span>
                                <x-heroicon-o-desktop-computer class="h-8 w-8 mr-4 text-red-600" /></span>
                            Partager ses plus beaux posts
                        </h1>
                        <p class="text-gray-500 group-hover:text-white">
                            Par le biais du partage l'on apprend le mieux, en exposant ses lacunes, on reçoit
                            les plus beaux critiques constructifs. Publier avec illustration si nécessaire puis
                            trouvez une proposition de solution idoine.
                        </p>
                    </div>
                </div>
                <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                    <div class="mx-2 my-2">
                        <h1 class="text-base font-semibold inline-flex"><span>
                                <x-heroicon-o-photograph class="h-8 w-8 mr-4 text-red-600" /></span> Illustrons pour
                            mieux se faire comprendre
                        </h1>
                        <p class="">
                            Parfois, il est important d'apporter une parfaite illustration (images mis en exemples) à
                            nos propos afin d'etre mieux compris par tous. Ajouter donc votre image ou capture d'écran.
                        </p>
                    </div>
                </div>
                <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                    <div class="mx-2 my-2">
                        <h1 class="text-base font-semibold inline-flex"><span>
                                <x-heroicon-o-annotation class="h-8 w-8 mr-4 text-red-600" /></span> Je commente pour
                            apporter mon
                            aide.
                        </h1>
                        <p class="">
                            Pour repondre ou apporter de l'aide à une personne, vous n'aurai qu'a commenter
                            simplement sa publication. Ceci contribura aussi a partager votre vision et perspective
                            à la préocupation posée.
                        </p>
                    </div>
                </div>
                <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                    <div class="mx-2 my-2">
                        <h1 class="text-base font-semibold inline-flex"><span>
                                <x-heroicon-o-globe class="h-8 w-8 mr-4 text-red-600" /></span>Nos langues d'accès</h1>
                        <p class="">
                            Tout le monde a droit à droit à l'information. Pour le besoin d'accès communataire, nous
                            avons rendu disponible la plateform (xChange) dans différents langues vivantes notament
                            le Français et l'Anglais.
                        </p>
                    </div>
                </div>
                @else
                <div class="border border-gray-300 shadow rounded-md p-4 max-w-xl w-full mx-auto mt-5">
                    <div class="animate-pulse flex space-x-4">
                        {{-- <div class="rounded-full bg-gray-300 h-12 w-12"></div> --}}
                        <div class="flex-1 space-y-4 py-1">
                            <div class="h-4 bg-gray-300 rounded w-3/4"></div>
                            <div class="space-y-2">
                                <div class="h-4 bg-gray-300 rounded"></div>
                                <div class="h-4 bg-gray-300 rounded w-5/6"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 shadow rounded-md p-4 max-w-xl w-full mx-auto mt-5">
                    <div class="animate-pulse flex space-x-4">
                        {{-- <div class="rounded-full bg-gray-300 h-12 w-12"></div> --}}
                        <div class="flex-1 space-y-4 py-1">
                            <div class="h-4 bg-gray-300 rounded w-3/4"></div>
                            <div class="space-y-2">
                                <div class="h-4 bg-gray-300 rounded"></div>
                                <div class="h-4 bg-gray-300 rounded w-5/6"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 shadow rounded-md p-4 max-w-xl w-full mx-auto mt-5">
                    <div class="animate-pulse flex space-x-4">
                        {{-- <div class="rounded-full bg-gray-300 h-12 w-12"></div> --}}
                        <div class="flex-1 space-y-4 py-1">
                            <div class="h-4 bg-gray-300 rounded w-3/4"></div>
                            <div class="space-y-2">
                                <div class="h-4 bg-gray-300 rounded"></div>
                                <div class="h-4 bg-gray-300 rounded w-5/6"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 shadow rounded-md p-4 max-w-xl w-full mx-auto mt-5">
                    <div class="animate-pulse flex space-x-4">
                        {{-- <div class="rounded-full bg-gray-300 h-12 w-12"></div> --}}
                        <div class="flex-1 space-y-4 py-1">
                            <div class="h-4 bg-gray-300 rounded w-3/4"></div>
                            <div class="space-y-2">
                                <div class="h-4 bg-gray-300 rounded"></div>
                                <div class="h-4 bg-gray-300 rounded w-5/6"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endisset

                {{-- <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                    <div class="mx-2 my-2">
                        <h1 class="text-base font-bold px-2">
                            Partager ses plus beaux posts
                        </h1>
                        <p class="text-gray-500 group-hover:text-white">
                            Par le biais du partage l'on apprend le mieux, en exposant ses lacunes, on reçoit
                            les plus beaux critiques constructifs. Publier avec illustration si nécessaire puis
                            trouvez une proposition de solution idoine.
                        </p>
                    </div>
                </div>
                <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                    <div class="mx-2 my-2">
                        <h1 class="text-base font-semibold">Illustrons pour mieux se faire comprendre</h1>
                        <p class="">
                            Parfois, il est important d'apporter une parfaite illustration (exemples) à nos propos
                            afin d'etre mieuxcompris par tous. Ajouter donc votre image ou capture d'écran.
                        </p>
                    </div>
                </div>
                <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                    <div class="mx-2 my-2">
                        <h1 class="text-base font-semibold">Je commente pour apporter mon aide.</h1>
                        <p class="">
                            Pour repondre ou apporter de l'aide à une personne, vous n'aurai qu'a commenter
                            simplement sa publication. Ceci contribura aussi a partager votre vision et perspective
                            à la préocupation posée.
                        </p>
                    </div>
                </div>
                <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                    <div class="mx-2 my-2">
                        <h1 class="text-base font-semibold">Nos langues d'accès</h1>
                        <p class="">
                            Tout le monde a droit à droit à l'information. Pour le besoin d'accès communataire, nous
                            avons rendu disponible la plateform (xChange) dans différents langues vivantes notament
                            le Français et l'Anglais.
                        </p>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>