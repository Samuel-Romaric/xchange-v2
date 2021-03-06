@extends('layouts.guest')

@section('title', 'Contactez-nous | ')

@section('css')

<style>

</style>

@endsection

@section('content')

<main x-data="data()" class="mb-7">
    <section class="">
        <div class="mx-auto bg-gradient-to-r from-blue-700 to-red-400 py-10">
            <h1 class="text-center text-4xl text-white">Contactez-nous</h1>
            <p class="text-center text-white">
                Veuillez laisser votre message en renseignant le formullaire ci-dessous.
            </p>
        </div>
    </section>

    <section class="max-w-7xl px-4 sm:px-6 lg:px-12 mx-auto mt-8">
        <div class="flex flex-col sm:flex-row container gap-4">

            <div
                class="bg-white sm:w-screen px-2 block py-4 space-y-4 rounded-lg shadow-xl transition duration-200 hover:shadow-2xl ">
                <div class="bg-red-300 w-full h-1/2 border border-gray-400 border-b-4">
                    <img src="{{ asset('/images/map.png') }}" alt="" style="height: 100%; width: 100%">
                </div>
                <div class="bg-white items-center text-base text-gray-600">
                    <p class="inline-flex items-center">
                        <span class="bg-gray-200 rounded-full mr-4">
                            <x-heroicon-s-location-marker class="h-10 w-10 text-blue-500" />
                        </span> Abidjan, Yopougon Cote d'Ivoire
                    </p><br>
                    <p class="inline-flex items-center">
                        <span class="bg-gray-200 px-1 py-1 rounded-full mr-4">
                            <x-heroicon-o-mail class="h-10 w-10" />
                        </span> info@xchange.com
                    </p><br>
                    <p class="inline-flex items-center">
                        <span class="bg-gray-200 rounded-full mr-4">
                            <x-heroicon-o-phone class="h-10 w-10" />
                        </span> (+225) 07 779 345 61
                    </p>
                </div>
            </div>

            <div
                class="sm:w-screen border border-gray-200 bg-white px-4 py-5 text-gray-600 font-serif rounded-xl shadow-xl transition duration-200 hover:shadow-2xl">
                <form action="{{ route('front.add_message') }}" method="post" class="bg-white px-5 py-5 rounded"
                    x-ref="contact_us_form">
                    @csrf

                    <div class="flex flex-col sm:flex-row md:w-full md:space-x-6">
                        <div class="md:w-1/2 sm:w-screen">
                            <label for="name" class="block">Nom & Prenom </label>
                            <input type="text" name="name" id="name"
                                class="block w-full rounded-lg border border-gray-500 focus:ring-1 focus:ring-blue-700 focus:border focus:border-blue-700"
                                placeholder="Tao TOTO">
                        </div>

                        <div class="md:w-1/2 sm:w-screen">
                            <label for="email" class="block">Email</label>
                            <input type="email" name="email" id="email"
                                class="block w-full rounded-lg border border-gray-500 focus:ring-1 focus:ring-blue-700 focus:border focus:border-blue-700"
                                placeholder="toto@exemple.com">
                        </div>
                    </div>

                    <div class="mt-3">
                        <label for="subject" class="block">Objet</label>
                        <input type="text" name="subject" id="subject"
                            class="block w-full rounded-lg border border-gray-500 focus:ring-1 focus:ring-blue-700 focus:border focus:border-blue-700"
                            placeholder="Demande de collaboration">
                    </div>

                    <div class="mt-3">
                        <label for="message" class="block">Message</label>
                        <textarea name="msg" id="message" cols="" rows="4"
                            class="block w-full rounded-lg border border-gray-500 focus:ring-1 focus:ring-blue-700 focus:border focus:border-blue-700"
                            placeholder="Ecrivez votre message ici..."></textarea>
                        <input type="hidden" name="sourceLink" value="{!! URL::previous() !!}">
                    </div>

                </form>
                <button type="submit" @click="sendMessage" x-ref="btn_send_form_contact"
                    class="items-center w-full bg-blue-500 hover:bg-blue-700 duration-200 text-white py-2 rounded-lg"
                    id="btn-contact-us">
                    <span>
                        <x-heroicon-o-check class="h-4 w-4 inline-flex" />
                    </span> Envoyer
                </button>
            </div>

        </div>
    </section>
</main>

@endsection

@section('script')

<script src="{{ asset('/js/jquery.js') }}"></script>
@include('flashy::message')

<script>
    function data() {
    return {
        sendMessage() {
            this.$refs.btn_send_form_contact.classList.add('cursor-wait', 'opacity-75');
            this.$refs.contact_us_form.submit();
            console.log('Ok send');
        },
    }
}
</script>

@endsection