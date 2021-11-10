@extends('layouts.guest')

@section('title', 'Reset password | ')

@section('content')

<main>
    <div class="max-w-lg mx-auto">

        <div class="text-center mt-5">
            <a href="{{ route('password.email') }}">
                <span class="bg-blue-500 font-bold text-2xl text-white px-2 py-1 rounded">xChange </span>
            </a>
        </div>

        <div
            class="bg-gray-100 text-base border border-gray-300 mb-7 mt-8 px-6 py-8 rounded-lg shadow-xl hover:shadow-2xl duration-300 transition">

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <div>
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div>
                        <label for="email">Email</label>
                        <div>
                            <input
                                class="block w-full rounded-md text-base py-2 h-9 border-gray-300 focus:border focus:border-blue-500"
                                type="email" name="email" id="email" value="{{ old('email', $request->email) }}"
                                required autofocus>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password">Password</label>
                        <div>
                            <input
                                class="block w-full rounded-md text-base py-2 h-9 border-gray-300 focus:border focus:border-blue-500"
                                type="password" name="password" id="password" required>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation">Confirm Password</label>
                        <div>
                            <input
                                class="block w-full rounded-md text-base py-2 h-9 border-gray-300 focus:border focus:border-blue-500"
                                type="password" name="password_confirmation" id="password_confirmation" required>
                        </div>
                    </div>

                    <!-- Button submit -->
                    <div class="flex items-center justify-center mt-4">
                        <button class="bg-blue-500 py-1 px-2 rounded-lg text-white" type="submit" class="">
                            Reset Password
                        </button>
                    </div>
                </div>

            </form>

        </div>

    </div>
</main>

@endsection