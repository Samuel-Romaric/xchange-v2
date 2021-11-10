@extends('layouts.guest')

@section('title', 'Welcome | ')

@section('css')

{{--
<style>
    .notification {
        background-color: #555;
        color: white;
        text-decoration: none;
        padding: 15px 26px;
        position: relative;
        display: inline-block;
        border-radius: 2px;
    }

    .notification:hover {
        background: red;
    }

    .notification .badge {
        position: absolute;
        top: -10px;
        right: -10px;
        padding: 5px 10px;
        border-radius: 50%;
        background: red;
        color: white;
    }
</style> --}}
{{-- <style>
    .container {
        position: relative;
        width: 50%;
    }

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
</style> --}}

{{-- <style>
    /* Loader **********************************************************/
    .loader {
        border: 16px solid #f3f3f3;
        /* Light grey */
        border-top: 16px solid #3498db;
        /* Blue */
        border-top: 16px solid blue;
        border-bottom: 16px solid blue;

        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear;
    }

    @keyframes spin {
        0% {

            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* End ***************************************** */
</style> --}}
<style>
    .carousel-container {
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        bottom: 50px;
        top: 50px;
        left: 50px;
        right: 50px;
        /* background-color: red;  */
    }

    .content {
        text-align: center;
    }
</style>
@endsection

@section('content')

<main class="max-w-7xl">
    {{-- <div class="loader"></div> --}}

    <section class="mt-0">

        <!-- Conteneur principal de tout le diaporama -->
        <div class="diapo">
            <!-- Conteneur des "diapos" -->
            <div class="elements">
                <!-- Première diapo -->
                <div class="element">
                    <img class="animate_animated slide fade" src="{{ asset('/images/front/slides/programming.jpg') }}"
                        alt="">
                    <div class="carousel-container">
                        <div class="content">
                            <h1 class="title animate_animated animate-fadeInDown">Bienvenu</h1>
                            <p class="text animate_animated animate-fadeInUp">
                                Toute l'équipe de xChange vous souhaite la bienvenue!
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Deuxième diapo -->
                <div class="element">
                    <img class="animate_animated slide fade" src="{{ asset('/images/front/slides/image-2.jpg') }}"
                        alt="">
                    <div class="carousel-container">
                        <div class="content">
                            <h1 class="title animate_animated animate-fadeInDown">Sur xChange</h1>
                            <p class="text animate-fadeInUp">
                                La plateforme d'échange qui vous aide à exposer vos préoccupations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Flèches de navigation -->
            <a id="nav-gauche" class="">
                &#10094;
            </a>
            <a id="nav-droite" class="">
                &#10095;
            </a>

            <!-- The dots/circles -->
            <div style="text-align:center; position:relative; top: -30px">
                {{-- <span class="dot active_dote" onclick="currentSlide(0)"></span> --}}
                {{-- <span class="dot" onclick="currentSlide(1)"></span> --}}
                {{-- <span class="dot" onclick="currentSlide(2)"></span> --}}
            </div>
        </div>

        <div class="py-4 bg-gray-200 border border-gray-200">
            <h1
                class="text-xl px-10 sm:px-5 lg:px-5 font-semibold text-center  bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-red-600">
                Le partage est une source de développement
            </h1>
            <p class="text-center px-10 sm:px-5 lg:px-10 mt-5">
                Conçus par des Africains, xChange préconise le développement professionnel a travère un
                esprit de partage de connaissance.
            </p>
        </div>

        <center>
            <div class="bg-gradient-to-r from-blue-300 to-red-400 h-1 my-5  w-3/4 rounded-xl">
            </div>
        </center>

        {{-- <div class="border border-gray-500 shadow rounded-md p-4 max-w-sm w-full mx-auto mt-5">
            <div class="animate-pulse flex space-x-4">
                <div class="rounded-full bg-gray-300 h-12 w-12"></div>
                <div class="flex-1 space-y-4 py-1">
                    <div class="h-4 bg-gray-300 rounded w-3/4"></div>
                    <div class="space-y-2">
                        <div class="h-4 bg-gray-300 rounded"></div>
                        <div class="h-4 bg-gray-300 rounded w-5/6"></div>
                    </div>
                </div>
            </div>
        </div> --}}

        <livewire:front.index-card />

        {{-- <div class="max-w-7xl px-10 sm:px-5 lg:px-12 mt-10 mx-auto">
            <div class="mt-10 bg-white">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                        <div class="mx-2 my-2">
                            <h1 class="text-base font-bold px-2">
                                Partager ses plus beaux posts
                            </h1>
                            <p class="text-gray-500 group-hover:text-white">
                                Par le biais du partage l'on apprend le mieux, en exposant ses lacunes, on reçoit
                                les plus beaux critiques constructifs. Publier avec illustration si nécessaire puis
                                trouvez une proposition de solution idoine.
                            </p>
                        </div>
                    </div>
                    <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                        <div class="mx-2 my-2">
                            <h1 class="text-base font-semibold">Illustrons pour mieux se faire comprendre</h1>
                            <p class="">
                                Parfois, il est important d'apporter une parfaite illustration (exemples) à nos propos
                                afin d'etre mieuxcompris par tous. Ajouter donc votre image ou capture d'écran.
                            </p>
                        </div>
                    </div>
                    <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                        <div class="mx-2 my-2">
                            <h1 class="text-base font-semibold">Je commente pour apporter mon aide.</h1>
                            <p class="">
                                Pour repondre ou apporter de l'aide à une personne, vous n'aurai qu'a commenter
                                simplement sa publication. Ceci contribura aussi a partager votre vision et perspective
                                à la préocupation posée.
                            </p>
                        </div>
                    </div>
                    <div class="text-gray-500 border border-gray-200 bg-gray-50 rounded-md shadow-md hover:shadow-xl">
                        <div class="mx-2 my-2">
                            <h1 class="text-base font-semibold">Nos langues d'accès</h1>
                            <p class="">
                                Tout le monde a droit à droit à l'information. Pour le besoin d'accès communataire, nous
                                avons rendu disponible la plateform (xChange) dans différents langues vivantes notament
                                le Français et l'Anglais.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="px-0 space-y-4 mt-10">
            <div class="bg-indigo-200 py-8">
                <center class="py-4">
                    <a href="{{ route('register') }}"
                        class="px-3 py-2 bg-blue-500 text-white ring-2 ring-white font-bold rounded-2xl btn-register hover:bg-green-500 duration-150">
                        Je m'inscris
                    </a>
                </center>

                <p class="mx-10 text-center text-gray-700 items-center">
                    Juste faire un clic sur le boutton ci-dessus puis remplire le formulaire de
                    renseignement, soummettre sa démande et bim mon compte est créé. L'usage de cette plateforme est et
                    reste entièrement accessible et grattuite pour tous.
                    <span class="text-yellow-700">
                        <x-heroicon-s-emoji-happy class="h-5 w-5 inline-flex" />
                    </span>
                </p>
            </div>
        </div>

        {{-- <center>
            *Ce qui ne te tue pas te rend plus fort, tout comme le phoenix qui renait de ses sendre,
            SEIGNEUR rélèvee moi! <br>
            *SEIGNEUR tu es celui qui comprend tout ce mystere autour de moi,
            Soit ma flamme, mon guide.
        </center> --}}

    </section>

</main>

@endsection

@section('script')

<script>
    // On récupère le conteneur principal du diaporama
    const diapo = document.querySelector(".diapo")

    // On récupère le conteneur de tous les éléments
    elements = document.querySelector(".elements")

    // On récupère un tableau contenant la liste des diapos
    slides = Array.from(elements.children)

    // On récupère les deux flèches
    let next = document.querySelector("#nav-droite")
    let prev = document.querySelector("#nav-gauche")

    // Variables globales
    let compteur = 0 // Compteur qui permettra de savoir sur quelle slide nous sommes
    let timer, slideWidth

    // On calcule la largeur visible du diaporama
    slideWidth = diapo.getBoundingClientRect().width

    // On met en place les écouteurs d'évènements sur les flèches
    next.addEventListener("click", slideNext)
    prev.addEventListener("click", slidePrev)

    /**
    * Cette fonction fait défiler le diaporama vers la droite
    */
    function slideNext(){
        // On incrémente le compteur
        compteur++

        // Si on dépasse la fin du diaporama, on "rembobine"
        if(compteur == slides.length){
                compteur = 0
            }

        // On calcule la valeur du décalage
        let decal = -slideWidth * compteur
        elements.style.transform = `translateX(${decal}px)`
    }

    /**
    * Cette fonction fait défiler le diaporama vers la gauche
    */
    function slidePrev(){
        // On décrémente le compteur
        compteur--

        // Si on dépasse le début du diaporama, on repart à la fin
        if(compteur < 0){
            compteur=slides.length - 1
        }

        // On calcule la valeur du décalage let decal=-slideWidth * compteur
            elements.style.transform=`translateX(${decal}px)`
    }

    // Automatiser le diaporama
    timer = setInterval(slideNext, 4000)

    // Gérer le survol de la souris
    diapo.addEventListener("mouseover", stopTimer)
    diapo.addEventListener("mouseout", startTimer)

    /**
    * On stoppe le défilement
    */
    function stopTimer(){
        clearInterval(timer)
    }

    /**
    * On redémarre le défilement
    */
    function startTimer(){
        timer = setInterval(slideNext, 4000)
    }

    // Mise en oeuvre du "responsive"
    window.addEventListener("resize", () => {
        slideWidth = diapo.getBoundingClientRect().width
        slideNext()
    })
</script>

{{-- <script>
    // On récupère le conteneur principal du diaporama
    const diapo = document.querySelector(".diapo")

    // On récupère le conteneur de tous les éléments
    elements = document.querySelector(".elements")

    // On récupère un tableau contenant la liste des diapos
    slides = Array.from(elements.children)

    // On récupère les deux flèches
    let next = document.querySelector("#nav-droite")
    let prev = document.querySelector("#nav-gauche")

    // Recuperer le slide courant
    let dots = document.getElementsByClassName("dot")

    // Variables globales
    let compteur = 0 // Compteur qui permettra de savoir sur quelle slide nous sommes
    let timer, slideWidth // , slideHeight

    // On met en place les écouteurs d'évènements sur les flèches
    next.addEventListener("click", slideNext)
    prev.addEventListener("click", slidePrev)

    /**
    * Cette fonction fait défiler le diaporama vers la droite
    */
    function slideNext() {
        // On incrémente le compteur
        compteur++

        // On cache toutes les image par defaut
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"
        }

        // Si on dépasse la fin du diaporama, on "rembobine"
        if(compteur == slides.length){
            compteur = 0
        }

        // On cache tout les éléments courant par defaut
        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active_dote", "" )
        }

        slides[compteur].style.display = "block"
        dots[compteur].className += " active_dote" // Activer l'élément courant
    }

    /**
    * Cette fonction fait défiler le diaporama vers la gauche
    */
    function slidePrev() {
        // On décrémente le compteur
        compteur--

        // On cache toute les images par defaut
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"
        }

        // On cache tout les éléménts [dot] par defaut
        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active_dote", "" )
        }

        // Si on dépasse le début du diaporama, on repart à la fin
        if (compteur < 0) {
            compteur = slides.length - 1
        }

        slides[compteur].style.display = "block"
        dots[compteur].className += " active_dote";
    }

    /**
    * Cette fonction affiche les points de défilement actif
    */
    function currentSlide(compteur = numberSlide) {
        // Pour toutes le nombre d'image qui soit l'on les caches par defaut
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"
        }

        // On cache tout les éléménts [dot] par defaut
        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active_dote", "" )
        }

        slides[compteur].style.display = "block"
        dots[compteur].className += " active_dote"
    }

    // Automatiser le diaporama
    timer = setInterval(slideNext, 4000)

    // Gérer le survol de la souris
    diapo.addEventListener("mouseover", stopTimer)
    diapo.addEventListener("mouseout", startTimer)

    /**
    * On stoppe le défilement
    */
    function stopTimer(){
        clearInterval(timer)
    }

    /**
    * On redémarre le défilement
    */
    function startTimer(){
        timer = setInterval(slideNext, 4000)
    }

    // Mise en oeuvre du "responsive"
    window.addEventListener("resize", () => {
        slideWidth = diapo.getBoundingClientRect().width
        slideNext()
    })
</script> --}}

@endsection