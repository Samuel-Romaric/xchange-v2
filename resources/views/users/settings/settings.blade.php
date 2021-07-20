@extends('layouts.app')

@section('title', ' | Paramètres')

@section('content')

<main x-data="data()" class="mx-8">
    <section class="mt-5">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto">
            {{-- <h1 class="text-base font-semibold"> Paramètres </h1> --}}
            <div class="w-1/4">
                @include('posts.partials.breadcrumb', ['title' => 'A revoire.......'])
            </div>
        </div>
    </section>

    <section class="mt-5 mb-7">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-7 gap-4 lg:gap-8">
                <div class="lg:col-span-2">
                    @include('users.partials.settings-nav', ['active' => 'infos'])
                </div>

                <div class="lg:col-span-5">
                    <form class="genSubmitForm" action="{{ route('user.make-infos') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">
                                        Nom
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="name" id="name" value="{{ $user->name }}"
                                            class="focus:ring-primary focus:border-primary flex-1 block w-full rounded-md font-medium sm:text-sm border-gray-300"
                                            placeholder="">
                                    </div>
                                </div>

                                {{-- <div>
                                    <label for="gender" class="block text-sm font-medium text-gray-700">
                                        Genre
                                    </label>
                                    <div class="mt-1 flex space-x-4">
                                        <div class="flex items-center">
                                            <input id="gender1" name="gender" type="radio" value="m"
                                                class="h-4 w-4 text-primary focus:ring-0 focus:outline-none border-gray-300"
                                                {{ $user->gender == 'm' ? 'checked' : '' }}>
                                <label for="gender1" class="ml-2 block text-sm text-gray-900">
                                    Home
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="gender2" name="gender" type="radio" value="f"
                                    class="h-4 w-4 text-primary focus:ring-0 focus:outline-none border-gray-300"
                                    {{ $user->gender == 'f' ? 'checked' : '' }}>
                                <label for="gender2" class="ml-2 block text-sm text-gray-900">
                                    Femme
                                </label>
                            </div>
                        </div>
                </div> --}}

                {{-- <div>
                                    <label for="country" class="block text-sm font-medium text-gray-700">
                                        Pays
                                    </label>
                                    <div class="mt-1">
                                        <select name="country" id="country"
                                            class="focus:ring-primary form-select block w-full focus:border-primary border-gray-300 text-gray-500 sm:text-sm font-medium rounded-md"> --}}
                {{-- @foreach (get_country_list() as $country)
                                            <option value="{{ $country }}"
                {{ $user->country == $country ? 'selected' : '' }}>{{ $country }}
                </option>
                @endforeach --}}
                {{-- </select>
                                    </div>
                                </div> --}}

                {{-- <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">
                                        Contact
                                    </label>
                                    <div class="mt-1">
                                        <input name="phone" value="{{ $user->phone }}"
                class="focus:ring-primary focus:border-primary flex-1 block w-full rounded-md
                font-medium sm:text-sm border-gray-300"
                id="phone" type="tel">

                <input type="hidden" value="{{ $user->phone }}" id="phone2" name="phone2">
            </div>
        </div> --}}

        <div>
            <label for="lang" class="block text-sm font-medium text-gray-700">
                Langue
            </label>
            <div class="mt-1">
                <select name="lang" id="lang"
                    class="focus:ring-primary form-select block w-full focus:border-primary border-gray-300 text-gray-700 sm:text-sm font-medium rounded-md">
                    <option value="fr" {{ $user->lang == "fr" ? 'selected' : '' }}>
                        Français
                    </option>
                    <option value="en" {{ $user->lang == "en" ? 'selected' : '' }}>
                        Anglais
                    </option>
                </select>
            </div>
        </div>


        <div>
            {{-- <label for="file-upload"
                class="relative cursor-pointer btn-secondary font-medium border border-gray-300 inline-flex items-center space-x-2 text-gray-700">
                <x-heroicon-o-upload class="h-4 w-auto" />
                <span>Charger une photo</span> --}}

            {{-- <input x-on:change="openCropper" id="file-upload" name="profile" type="file" class=""> --}}
            {{-- </label> --}}

            <label for="avatar" class="block text-sm text-gray-700 font-medium">
                Photo de profile
            </label>
            <div class="mt-5">
                <input type="file" name="my_avatar" id="avatar">
            </div>

            <div class="mt-2 flex items-center cover-loader" style="display: none;">
                <svg class="animate-spin mr-2 h-4 w-4 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                    </circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                <span class="text-primary">{{ __('learner.settings.message-piture-loading') }}</span>
            </div>
            <div class="mt-2 cover-add-message" style="display: none;">
                <span class="text-green-600">{!! __('learner.settings.message-piture-load')
                    !!}</span>
            </div>
            {{-- <input type="hidden" name="fileCropPath"> --}}
        </div>


        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" id="save-button"
                class="inline-flex genSubmitFormAction items-center justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                <svg class="animate-spin mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" style="display: none;">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                    </circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                <span>Mettre à jour </span>
            </button>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
    </section>
</main>

@endsection

@section('script')
<script>
    function data() {
        return {}
    }
</script>
@endsection