<ul class="flex flex-col space-y-1">
    <li class="px-4 py-2 rounded-md {{ $active === "infos" ? "bg-blue-50" : "duration-200 hover:bg-gray-100" }}">
        <a class="flex text-sm font-medium {{ $active === "infos" ? "text-primary duration-200 hover:text-blue-700" : "text-gray-600 duration-200 hover:text-gray-700" }} items-center space-x-3"
            href="{{ route('user.settings.index') }}">
            <x-heroicon-o-home class="h-6 w-auto" />
            <span>Information générales</span></a>
    </li>
    <li class="px-4 py-2 rounded-md {{ $active === "credentials" ? "bg-blue-50" : "duration-200 hover:bg-gray-100" }}">
        <a class="flex text-sm font-medium {{ $active === "credentials" ? "text-primary duration-200 hover:text-blue-700" : "text-gray-600 duration-200 hover:text-gray-700" }} items-center space-x-3"
            href="{{ route('user.show_credentials') }}">
            <x-heroicon-o-lock-closed class="h-6 w-auto" />
            <span>Paramètres de connexion</span></a>
    </li>
    {{-- <li class="px-4 py-2 rounded-md {{ $active === "invoices" ? "bg-blue-50" : "duration-200 hover:bg-gray-100" }}">
    <a class="flex text-sm font-medium {{ $active === "invoices" ? "text-primary duration-200 hover:text-blue-700" : "text-gray-600 duration-200 hover:text-gray-700" }} items-center space-x-3"
        href="{{ route('learner.show-invoices') }}">
        <x-heroicon-o-cash class="h-6 w-auto" />
        <span>{{ __('learner.settings.partials.sidenavbar.text-invoice') }}</span></a>
    </li> --}}
    {{-- <li class="px-4 py-2 rounded-md {{ $active === "account" ? "bg-blue-50" : "duration-200 hover:bg-gray-100" }}">
    <a class="flex text-sm font-medium {{ $active === "account" ? "text-primary duration-200 hover:text-blue-700" : "text-gray-600 duration-200 hover:text-gray-700" }} items-center space-x-3"
        href="">
        <x-heroicon-o-user-circle class="h-6 w-auto" />
        <span>Suppression de compte</span></a>
    </li> --}}
</ul>