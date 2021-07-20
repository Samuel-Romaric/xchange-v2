@extends('layouts.app')

@section('title', ' | Accueil')

@section('content')

<main x-data="">
    <div class="py-5 px-80">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-300">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    Livewire
                    <livewire:posts.posts-index />
                </div>
            </div>
        </div>
    </div>
    *********************************************************************************************
    <div class="bg-blue-300 px-10 py-5 w-full">


        lolo
    </div>
</main>

@endsection