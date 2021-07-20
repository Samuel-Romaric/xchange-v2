@extends('layouts.guest')

@section('title', ' | Connexion')

@section('content')

<div class="max-w-lg mx-auto">

    <div class="text-center mt-5">
        <a href="{{ route('login') }}">
            <span class="bg-blue-500 font-bold text-2xl text-white px-2 py-1 rounded">xChange connexion</span>
        </a>
    </div>

    <div
        class="bg-gray-100 border border-gray-300 mt-8 px-6 py-8 rounded-xl shadow-xl hover:shadow-2xl duration-300 transition">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="space-y-4">
                <div>
                    <!-- Email Address -->
                    <div class="inline-flex w-full space-x-1">
                        <label for="email" class="text-gray-500 py-2">
                            <x-heroicon-s-user class="h-8 w-8" />
                        </label>

                        <input id="email" name="email" class="block mt-1 w-full rounded-xl" type="email"
                            value="{{ old('email') }}" placeholder="user@domain.com" required autofocus>
                        @error('email')
                        <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-4 inline-flex w-full space-x-1">
                        <label for="password" class="text-gray-500 py-2">
                            <x-heroicon-s-lock-closed class="h-8 w-8" />
                        </label>

                        <input id="password" class="block mt-1 w-full rounded-xl" type="password" name="password"
                            required autocomplete="current-password" placeholder="password">
                        @error('password')
                        <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex justify-between">
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                    @endif

                </div>

                <div>
                    <a class="text-blue-500 underline mt-5 mr-3" href="{{ route('register') }}">J'ai pas de compte</a>
                    <button
                        class="bg-blue-500 cursor-pointer inline-flex mt-5 duration-200 hover:bg-blue-700 py-2 rounded-md px-2 text-white text-base"
                        type="submit">Connecter</button>
                </div>
            </div>

        </form>
    </div>

</div>

@endsection