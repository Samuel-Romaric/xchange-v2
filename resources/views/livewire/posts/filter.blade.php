<div class="mt-4 flex flex-col sm:flex-row lg:flex items-center justify-between">

    <div class="items-center space-x-3 h-8 shadow hover:shadow-lg">
        <select name="" id="" class="rounded-lg bg-white text-gray-600 font-medium text-sm border border-gray-300">
            <option value="">Categorie</option>
            <option value="">PHP</option>
            <option value="">CSS</option>
            <option value="">MySQL</option>
            <option value="">Autre</option>
        </select>
    </div>

    <div class="w-1/2">
        <div class="relative rounded-3xl shadow-lg">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <span class="text-gray-500 sm:text-xs font-medium">
                    <x-heroicon-o-search class="h-4 w-4" />
                </span>
            </div>
            <input type="text" wire:model.debounce.500ms="research"
                class="focus:ring-blue-600 focus:border-blue-600 focus:shadow-2xl block w-full pl-10 pr-12 sm:text-sm focus:z-20 font-medium border-gray-400 py-2 rounded-3xl"
                placeholder="Rechercher une publication ...">
        </div>
    </div>

</div>