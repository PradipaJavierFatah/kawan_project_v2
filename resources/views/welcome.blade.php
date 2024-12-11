@extends('layout')

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.5.1/dist/flowbite.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="font-poppins">

    <div id="header">
        {{-- Navbar Start --}}
        <nav class="sticky top-0 z-50 bg-white">
            @section('content')
        </nav>
        {{-- Navbar End --}}

            {{-- Home Start --}}
            <div class="container">
                <div class="w-screen">
                    <div
                        style="background-image: url('{{ asset('asset/home/bg-1.png') }}'); background-size: cover; background-position: center; height: 100vh;">

                        {{-- Section Start --}}
                        <section id="home" class="pt-36">
                            <div class="container px-6">
                                <div class="flex flex-wrap px-7">
                                    <div class="w-full self-center px-4">
                                        <h1 class="text-base font-bold text-yellow-400 md:text-4xl">
                                            Learning to<span
                                                class="mt-4 block text-4xl font-bold text-yellow-400 lg:text-5xl">
                                                Achieve and Maintain a Good Life</span>
                                        </h1>
                                    </div>
                                    <p class="m-4 font-medium leading-relaxed text-white">
                                        Kawan Project is an educational platform that presents various important knowledge
                                        about
                                        life that is rarely taught in schools. Our goal is to accompany and help you develop
                                        yourself to achieve a better and more balanced life. With various inspiring and
                                        practical content, we are committed to being your partner on your journey to the
                                        best
                                        version of yourself.
                                    </p>
                                </div>
                            </div>
                        </section>
                        {{-- Section End --}}

                        {{-- Services Start --}}
                        <div id="services" class="mt-8">
                            <!-- Our Services Title -->
                            <div class="text-center mb-8">
                                <h2 class="text-3xl font-bold text-white">Our Services</h2>
                            </div>

                            <!-- Card Container -->
                            <div class="container mx-auto flex justify-center">
                                <div id="skillsContainer"
                                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 pt-4">

                                    <!-- Card 1 -->
                                    <div
                                        class="group relative flex flex-col justify-center items-center bg-purple-900 p-6 rounded-lg hover:bg-purple-700 transition-colors duration-300 w-48 h-54">
                                        <a href="plans-login">
                                        <img src="{{ asset('asset/home/Mentor.png') }}" alt="Mentor"
                                            class="w-25 h-25 mb-2">
                                        <h3 class="mt-4 text-center text-white font-medium">Mentor</h3>
                                        </a>
                                    </div>

                                    <!-- Card 2 -->
                                    <div
                                        class="group relative flex flex-col justify-center items-center bg-purple-900 p-6 rounded-lg hover:bg-purple-700 transition-colors duration-300 w-48 h-54">
                                        <img src="{{ asset('asset/home/Consultant.png') }}" alt="Consultant"
                                            class="w-25 h-25 mb-2">
                                        <h3 class="mt-4 text-center text-white font-medium">Consultant</h3>
                                    </div>

                                    <!-- Card 3 -->
                                    <div
                                        class="group relative flex flex-col justify-center items-center bg-purple-900 p-6 rounded-lg hover:bg-purple-700 transition-colors duration-300 w-48 h-54">
                                        <a href="stress-level-Check">
                                            <img src="{{ asset('asset/home/mbti.png') }}" alt="MBTI Test"
                                                class="w-25 h-25 mb-2">
                                            <h3 class="mt-4 text-center text-white font-medium">MBTI Test</h3>
                                        </a>
                                    </div>

                                    <!-- Card 4 -->
                                    <div
                                        class="group relative flex flex-col justify-center items-center bg-purple-900 p-6 rounded-lg hover:bg-purple-700 transition-colors duration-300 w-48 h-54">
                                        <a href="personality-test">
                                            <img src="{{ asset('asset/home/stresss.png') }}" alt="Stress Test"
                                                class="w-25 h-25 mb-2">
                                            <h3 class="mt-4 text-center text-white font-medium">Stress Test</h3>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- Services End --}}
                    </div>
                </div>
            </div>
            {{-- Home End --}}

            {{-- Carousel Start --}}
            <div class="container">
                <div class="w-screen">
                    <div
                        style="background-image: url('{{ asset('asset/home/bg-2.png') }}'); background-size: cover; background-position: center; height: 100vh;">

                        <div class="text-center pt-8 mb-8">
                            <h2 class="text-3xl font-bold text-white">Attractive Offers</h2>
                        </div>

                        {{-- Section Start --}}
                        <div class="container mx-auto flex justify-center">
                            <div id="default-carousel" class="relative w-full " data-carousel="slide">
                                <!-- Carousel wrapper -->
                                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                    <!-- Item 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('asset/home/promo1.png') }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('asset/home/promo2.png') }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ asset('asset/home/promo3.png') }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                </div>
                                <!-- Slider indicators -->
                                <div
                                    class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                </div>
                                <!-- Slider controls -->
                                <button type="button"
                                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-white-800/30 group-hover:bg-white/50 dark:group-hover:bg-white-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-white-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-white-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-white-800/30 group-hover:bg-white/50 dark:group-hover:bg-white-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-white-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-white-800 rtl:rotate-180"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Carousel End --}}
        @endsection

    </div>

</body>
{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/flowbite@1.5.1/dist/flowbite.min.js"></script>

</html>
