@extends('layouts.guest')

@section('title', 'Password link send | ')

@section('content')

<main role="main">
    <div class="max-w-lg mx-auto">
        <div class="text-center mt-5">
            <a href="{{ route('password.email') }}">
                <span class="bg-blue-500 font-bold text-2xl text-white px-2 py-1 rounded">xChange </span>
            </a>
        </div>

        <div
            class="bg-gray-100 border border-gray-300 mt-8 px-6 py-8 rounded-xl shadow-xl hover:shadow-2xl duration-300 transition">

            <div class="mb-4 text-sm text-gray-600">
                {{ __('Un mail contenant un lien de réinitailisation de votre mot de passe vous à été envoyé au mail indiqué. Veuillez consulter votre addresse mail pour terminer le processus. Si dans quelques instant vous n\'avez toujours pas a voir ledit mail vous pouvez en faire une nouvelle demande en cliquant sur le bouton ci-dessous.') }}
            </div>

            <div>
                <a class="flex items-center justify-center mt-4 px-2 py-2 bg-blue-500 text-white hover:bg-blue-700 rounded-xl"
                    href="{{ route('password.email') }}">
                    Obtenir un nouveau lien
                    <span class="inline-flex ml-2">
                        <x-heroicon-o-link class="h-4 w-4" />
                    </span>
                </a>
            </div>

        </div>

    </div>

</main>

@endsection