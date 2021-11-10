@extends('layouts.guest')

@section('title', 'Reset password | ')

@section('content')

<main role="main">
    <div class="max-w-lg mx-auto">
        <div class="text-center mt-5">
            <a href="{{ route('password.email') }}">
                <span class="bg-blue-500 font-bold text-2xl text-white px-2 py-1 rounded">xChange connexion</span>
            </a>
        </div>

        <div
            class="bg-gray-100 border border-gray-300 mt-8 px-6 py-8 rounded-xl shadow-xl hover:shadow-2xl duration-300 transition">

            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <form action="" method="post">
                @csrf

                <div>
                    @error('email')
                    <p class="text-red-700 text-sm"> {{ $message }} </p>
                    @enderror
                    <label for="email" class="block text-gray-700">
                        {{ __('Email') }}
                    </label>
                    <input class="block mt-1 w-full rounded-lg" type="email" name="email" id="email">
                </div>

                <div>
                    <button type="submit"
                        class="flex items-center justify-end mt-4 px-2 py-2 bg-blue-500 text-white hover:bg-blue-700 rounded-xl">
                        Email Password Reset Link
                    </button>
                </div>

            </form>

        </div>

    </div>


</main>

@endsection





{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
</div>

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
            autofocus />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-button>
            {{ __('Email Password Reset Link') }}
        </x-button>
    </div>
</form>
</x-auth-card>
</x-guest-layout> --}}