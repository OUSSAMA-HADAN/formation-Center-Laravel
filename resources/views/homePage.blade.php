<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with Tailwind</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');


        .merriweather-light {
            font-family: "Merriweather", serif;
            font-weight: 300;
            font-style: normal;
        }

        .merriweather-regular {
            font-family: "Merriweather", serif;
            font-weight: 400;
            font-style: normal;
        }

        .merriweather-bold {
            font-family: "Merriweather", serif;
            font-weight: 700;
            font-style: normal;
        }

        .merriweather-black {
            font-family: "Merriweather", serif;
            font-weight: 900;
            font-style: normal;
        }

        .merriweather-light-italic {
            font-family: "Merriweather", serif;
            font-weight: 300;
            font-style: italic;
        }

        .merriweather-regular-italic {
            font-family: "Merriweather", serif;
            font-weight: 400;
            font-style: italic;
        }

        .merriweather-bold-italic {
            font-family: "Merriweather", serif;
            font-weight: 700;
            font-style: italic;
        }

        .merriweather-black-italic {
            font-family: "Merriweather", serif;
            font-weight: 900;
            font-style: italic;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-emerald-500 shadow-lg fixed w-full top-0 z-10">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <a href="#" class="flex items-center ">
                        <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-18">
                        <span class="font-semibold text-gray-500 text-lg"></span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-1 merriweather-light">
                    <a href="#"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Acceil</a>
                    <a href="#surNous"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Sue
                        Nous</a>
                    <a href="#location"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">location</a>
                    {{-- <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Contact</a> --}}
                    <a href="{{route('create')}}"
                        class="py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">S'inscrire</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-500 hover:text-blue-500" x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="hidden mobile-menu">
            <ul class="">
                <li class="active"><a href="#"
                        class="block text-sm px-2 py-4 text-white bg-blue-600 font-semibold">Home</a></li>
                <li><a href="#surNous" class="block text-sm px-2 py-4 hover:bg-blue-600 transition duration-300">Sue
                        Nous</a></li>
                <li><a href="#location"
                        class="block text-sm px-2 py-4 hover:bg-blue-600 transition duration-300">location</a></li>
                {{-- <li><a href="#" class="block text-sm px-2 py-4 hover:bg-blue-600 transition duration-300">Contact</a></li> --}}
                <li><a href="{{route('create')}}"
                        class="block text-sm px-2 py-4 hover:bg-blue-600 transition duration-300">S'inscrire</a></li>
            </ul>
        </div>
    </nav>

    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center min-h-screen flex items-center justify-center px-4 md:px-8 opacity-0 transition-all duration-700 "
        style="background-image: url('{{ asset('storage/images/hero-bg-2.png') }}');">
        <div class="absolute inset-0 bg-green-900 opacity-50"></div>
        <div class="relative flex flex-col items-center justify-center text-center text-white max-w-4xl">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 merriweather-bold" style="color: white;">Centre de Ressources
                du préscolaire - OUJDA</h1>
            <p class="text-lg md:text-xl mb-6 merriweather-regular-italic" style="color: white;">Ici vous pouvez
                consulter nos informations et vous inscrire pour participer à la formation</p>
            <a href="{{route('create')}}"
                class="bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 text-sm md:text-base">S'inscrire</a>
        </div>
    </section>


    <section id="surNous" class="h-screen flex items-center justify-center bg-gray-100 opacity-0 transition-all duration-700">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center h-full">
                <!-- Text Content -->
                <div class="md:w-1/2 mb-6 md:mb-0 text-center md:text-left">
                    <h2 class="text-2xl font-bold mb-4">Bienvenue au Centre de Ressources pour l'Enseignement Primaire à
                        OUJDA</h2>
                    <p class="text-gray-600 mb-4">
                        Au Centre de Ressources , nous nous engageons à offrir une formation de qualité pour vous aider
                        à atteindre vos objectifs.
                        Nos programmes sont conçus pour répondre aux besoins des enseignants et des professionnels de
                        l’éducation souhaitant enrichir leurs compétences et favoriser l’excellence pédagogique.
                    </p>
                    <p class="text-gray-600">
                        Avec des formateurs expérimentés, des installations modernes et un environnement d’apprentissage
                        bienveillant, nous veillons à ce que chaque apprenant dispose des outils et des connaissances
                        nécessaires pour réussir. Rejoignez-nous et commencez votre parcours dès aujourd’hui !
                    </p>
                </div>
                <!-- Image Content -->
                <div class="md:w-1/2 flex justify-center">
                    <img src="{{ asset('storage/images/image-ecole.png') }}"
                        class="w-full max-w-md rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <section id="location" class="min-h-screen flex flex-col justify-center bg-gray-100 py-10 opacity-0 transition-all duration-700">
        <div class="container mx-auto px-6">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold">Notre localisation</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Retrouvez-nous à l'adresse ci-dessous ou explorez notre
                    emplacement exact sur la carte.</p>
            </div>
            <div class="flex justify-center">
                <div class="w-full max-w-4xl">
                    <div class="relative w-full h-80 md:h-[450px]">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.0650964313495!2d-1.915168!3d34.6783065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd78659d1f422f09%3A0xf34ce4c061aff2ff!2z2KfZhNmF2K_Ysdiz2Kkg2KfZhNil2KjYqtiv2KfYptmK2Kkg2LPZitiv2Yog2LLZitin2YYg2KfZhNmF2K7YqtmE2LfYqQ!5e0!3m2!1sen!2sma!4v1735366763972!5m2!1sen!2sma"
                            class="absolute top-0 left-0 w-full h-full border-0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-emerald-500 shadow-lg mt-8">
        <div class="container mx-auto px-4 py-6 text-center">
            <p class="text-gray-600">&copy; 2023 Laravel Tailwind. All rights reserved.</p>
        </div>
    </footer>



    <script>
        const sections = document.querySelectorAll("section");
    
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("opacity-100", "translate-y-0");
                } else {
                    // Reset animation when scrolling out (optional)
                    entry.target.classList.remove("opacity-100", "translate-y-0");
                }
            });
        }, { threshold: 0.2 });
    
        sections.forEach(section => {
            observer.observe(section);
        });
    </script>
</body>

</html>
