@extends('layouts.guest')

@section('title', 'Communauté | ')

@section('css')
<style>
    .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 100%;
        right: 0;
        background-color: #008CBA;
        overflow: hidden;
        width: 0;
        height: 100%;
        transition: .5s ease;
    }

    .container:hover .overlay {
        width: 100%;
        left: 0;
    }

    .text {
        white-space: nowrap;
        color: white;
        font-size: 20px;
        position: absolute;
        overflow: hidden;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }
</style>
@endsection

@section('content')

<main class="" x-data="data()">

    <section class="max-w-7xl">
        <div class="mx-auto bg-gradient-to-br from-blue-700 to-red-400  bg-indigo-800 py-10">
            <h1 class="text-center text-4xl text-white font-bold">Notre Communauté xChange</h1>
            <p class="text-center text-white">
                Retrouvez sur notre plateforme une Communauté courtoise et variée de professionnel.
            </p>
        </div>

        <div class="mt-14 mb-28 mx-10">
            <div class="">
                <h1 class="text-2xl text-center mt-8" style="color: #ed502e">Nos membres les plus actifs</h1>
                <p class="mt-5 my-5" style="color: #0f2f57;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui distinctio vero assumenda, a odio
                    consectetur tempora architecto harum doloremque mollitia cumque sit saepe quos dicta unde, enim
                    sapiente temporibus accusamus.
                </p>
            </div>
        </div>

        {{-- <div class="container">
            <img src="{{ asset('/images/front/codes.jpg') }}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text">Hello World</div>
        </div>
        </div> --}}

    </section>

</main>

@endsection

@section('script')

<script>
    function data() {
        return {
            //
        }
    }
</script>

<script>
    $("#test").fadeIn(2000).animate({
        // marginTop: "50%"
    }, 5000);
</script>

{{-- <script>
    function scrollToTop(duration) {
        // Cancel
        if (document.scrollingElement.scrollTop === 0) return;

        const cosParameter = document.scrollingElement.scrollTop / 2;
        let scrollCount = 0, oldTimestamp = null;

        function step(newTimestamp) {
            if (oldTimestamp !== null) {
                // if duration
                scrollCount += Math.PI * (newTimestamp - oldTimestamp) / duration;
                if (scrollCount >= Math.PI) return document.scrollingElement.scrollTop = 0;
                document.scrollingElement.scrollTop = cosParameter + cosParameter * Math.cos(scrollCount);
            }
            oldTimestamp = newTimestamp;
            window.requestAnimationFrame(step);
        }
        window.requestAnimationFrame(step);
    }
</script> --}}

@endsection