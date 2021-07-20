@extends('layouts.app')

@section('title', ' | Paramètres')

@section('content')

<section class="mt-5">
    <div class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto">
        <h1 class="text-base font-semibold"> Paramètres </h1>
    </div>
</section>
<section class="mt-5 mb-7">
    <div class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-7 gap-4 lg:gap-8">
            <div class="lg:col-span-2">
                @include('users.partials.settings-nav', ['active' => 'credentials'])
            </div>

            <div class="lg:col-span-5">
                <form action="{{ route('user.make-credentials') }}" method="POST">
                    @csrf
                    <input type="hidden" name="modify-type" value="modify-email">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-4 sm:p-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    Email
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="email" name="email" id="email" value="{{ $user->email }}"
                                        class="focus:ring-primary focus:border-primary flex-1 block w-full rounded-md font-medium sm:text-sm border-gray-300"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Mettre à jour
                            </button>
                        </div>
                    </div>
                </form>

                <form class="mt-6" action="{{ route('user.make-credentials') }}" method="POST">
                    @csrf
                    <input type="hidden" name="modify-type" value="modify-password">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-4 sm:p-6">
                            <div>
                                <label for="old_password" class="block text-sm font-medium text-gray-700">
                                    Ancien mot de passe
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="password" name="old_password" id="old_password"
                                        class="focus:ring-primary focus:border-primary flex-1 block w-full rounded-md font-medium sm:text-sm border-gray-300"
                                        placeholder="">
                                </div>
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    Nouveau mot de passe
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="password" name="password" id="password"
                                        class="focus:ring-primary focus:border-primary flex-1 block w-full rounded-md font-medium sm:text-sm border-gray-300"
                                        placeholder="">
                                </div>
                            </div>
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                                    Confirmer Nouveau mot de passe
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="focus:ring-primary focus:border-primary flex-1 block w-full rounded-md font-medium sm:text-sm border-gray-300"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Mettre à jour
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection