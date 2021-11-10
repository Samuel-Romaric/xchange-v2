@extends('layouts.guest')

@section('title', 'Connexion | ')

@section('content')

<div class="max-w-lg mx-auto">

    <div class="text-center mt-10">
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
                    <div class="block w-full space-x-1">
                        <label for="email" class="text-gray-500 block hover:text-gray-700 py-2">
                            E-mail
                        </label>

                        <input id="email" name="email" class="block mt-1 w-full rounded-lg" type="email"
                            value="{{ old('email') }}" placeholder="user@domain.com" required autofocus>
                        @error('email')
                        <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-4 block w-full space-x-1">
                        <label for="password" class="text-gray-500 block hover:text-gray-700 py-2">
                            Mot de passe
                        </label>

                        <div class="relative">
                            {{-- <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                                <span class="text-gray-500" onclick="showPassword()">
                                    <x-heroicon-o-eye class="h-6 w-6" />
                                </span>
                            </div> --}}
                            <input id="password" class="block mt-1 w-full rounded-lg" type="password" name="password"
                                required autocomplete="current-password" placeholder="password">
                        </div>
                        @error('password')
                        <p class="text-red-600 mt-1 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié ?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="items-center">
                    <button
                        class="bg-blue-500 justify-center cursor-pointer items-center inline-flex mt-5 duration-200 hover:bg-blue-700 py-2 rounded-md px-2 text-white text-base w-full"
                        type="submit">Je me connect
                    </button>
                    <a class="text-blue-600 hover:underline cursor-pointer text-sm mt-5 mr-3"
                        href="{{ route('register') }}">J'ai pas de compte</a>
                </div>
            </div>

        </form>
    </div>

</div>

@endsection

@section('script')
<script>
    function showPassword() {
       let x = document.getElementsByName("password")

       if (x.type == "password") {
           x.type = "text"
       } else {
           x.type = "password"
       }
    }
</script>
@endsection