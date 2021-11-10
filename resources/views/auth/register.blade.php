@extends('layouts.guest')

@section('title' ,'Inscription | ')

@section('content')

<div class="max-w-lg mx-auto mt-8">
    <h1 class="text-center">
        <a href="{{ route('register') }}">
            <span class="bg-blue-500 font-bold text-2xl text-white px-2 py-1 rounded">Inscription</span>
        </a>
    </h1>

    <div
        class="bg-gray-100 text-sm border border-gray-300 mb-7 mt-8 px-6 py-8 rounded-lg shadow-xl hover:shadow-2xl duration-300 transition">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="text-gray-600 block" for="name">Nom & prénom</label>
                    <input name="name" value="{{ old('name') }}"
                        class="block w-full rounded-md text-base py-2 h-9 border-gray-300 focus:border focus:border-blue-500"
                        id="name" type="text" placeholder="User-name">
                    @error('name')
                    <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-500 block" for="email">Email</label>
                    <input value="{{ old('email') }}" name="email"
                        class="block w-full rounded-md text-base py-2 h-9 border-gray-300 focus:border focus:border-blue-500"
                        id="email" type="text" placeholder="user@domaine.com">
                    @error('email')
                    <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-600 block" for="password">Choisis un mot de passe</label>
                    <input name="password"
                        class="block w-full rounded-md text-base py-2 h-9 border-gray-300 focus:border focus:border-blue-500"
                        id="password" type="password" placeholder="password">
                    @error('password')
                    <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-600" for="password">Confirmer le mot de passe</label>
                    <input name="password_confirmation"
                        class="block w-full rounded-md text-base py-2 h-9 border-gray-300 focus:border-blue-500"
                        id="password" type="password" placeholder="password">
                </div>
            </div>

            <!-- Policies -->
            <div class="flex items-center justify-between mt-4">
                <div>
                    @error('policies')
                    <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                    <label for="read_policies" class="inline-flex items-center">
                        <input id="read_policies" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="policies" value="1">
                        <span class="ml-2 text-sm text-gray-600">
                            {{ __("J'ai lu et j'accèpte les ") }}
                            <a href="{{ route('front.policy') }}" class="text-blue-600 hover:underline"
                                target="_blank">conditions d'utilisations</a>.
                        </span>
                    </label>
                </div>

            </div>

            <button
                class="bg-blue-500 mt-5 duration-200 hover:bg-blue-700 py-2 rounded-md px-2 text-white block w-full text-base"
                type="submit">Je m'inscris</button>
        </form>
        <div class="text-center mt-2">
            <a class="cursor-pointer text-indigo-500 hover:underline text-sm hover:text-indigo-700"
                href="{{ route('login') }}">J'ai déjà un compte</a>
        </div>
    </div>
</div>

@endsection