@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ENFJ Personality</title>
    <link rel="stylesheet" href="{{ asset('css/personality/output.css') }}">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">

    <link href="/css/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/coba.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

    <style>
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-pink-50 font-sans leading-normal tracking-normal">
    <nav class="sticky top-0 z-50 bg-white">
    </nav>
    {{-- Navbar End --}}

    @section('content')

        <section class="bg-purple-300 p-8 flex items-center justify-center fade-in">
            <div class="flex items-center">
                <div class="ml-6 text-white text-center md:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold">Congratulations!</h1>
                </div>
            </div>
        </section>

        <section class="p-8 flex flex-col justify-center items-center fade-in">
            <img src="asset/personality/ENFJ.png" alt="Large Image" class="w-full max-w-2xl" />
            <span class="font-bold text-slate-500 text-8xl mt-4 justify-center items-center">ENFJ</span>
        </section>

        <section class="p-6 bg-pink-custom fade-in">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-3xl md:text-4xl font-bold">What is an ENFJ?</h2>
                <p class="mt-4 text-base md:text-lg">
                    ENFJ (Extraverted, Intuitive, Feeling, Judging) dikenal sebagai "Sang
                    Protagonis." Mereka adalah pemimpin karismatik dan empatik yang penuh
                    semangat membantu orang lain. ENFJ berkembang dalam peran yang
                    memungkinkan mereka menginspirasi dan memotivasi orang lain menuju
                    tujuan bersama.
                </p>
            </div>
        </section>

        <section class="p-6 bg-white fade-in">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                    Benefits of Being an ENFJ
                </h2>
                <ul class="mt-4 text-base md:text-lg text-pink-custom space-y-4">
                    <li>
                        1. ENFJ memiliki karisma alami dan adalah komunikator yang terampil.
                    </li>
                    <li>
                        2. ENFJ adalah individu yang sangat empatik yang benar-benar peduli
                        dengan kesejahteraan orang lain.
                    </li>
                    <li>
                        3. ENFJ adalah pemikir visioner yang bisa melihat gambaran besar dan
                        menginspirasi orang lain untuk bekerja menuju tujuan yang sama.
                    </li>
                    <li>
                        4. ENFJ menghargai harmoni dan kolaborasi dalam hubungan dan
                        lingkungan kerja mereka.
                    </li>
                    <li>
                        5. Memiliki semangat, optimisme, dan kemampuan untuk terhubung
                        dengan orang lain, ENFJ memiliki pengaruh yang kuat bagi mereka di
                        sekitar.
                    </li>
                </ul>
            </div>
        </section>

        <div class="flex justify-center my-8 transition-colors duration-300 fade-in">
            <button id="downloadButton"
                class="bg-[#F2789F] text-white py-2 px-4 rounded-lg transition-transform transform hover:scale-110 hover:bg-pink-700">
                Download ENFJ
            </button>
        </div>

        <section class="p-6 text-purple-400 bg-white text-center fade-in">
            <h2 class="text-3xl md:text-4xl font-bold text-purple-600">
                Deep dive ENFJ
            </h2>
        </section>

        <section class="relative bg-purple-300 p-8 fade-in">
            <div class="backdrop-blur-lg bg-white bg-opacity-20 p-6 rounded-lg">
                <div class="max-w-4xl mx-auto text-center text-white">
                    <h2 class="text-3xl md:text-4xl font-bold">
                        What does ENFJ stand for?
                    </h2>
                    <p class="mt-4 text-base md:text-lg">
                        ISFP adalah singkatan dari Introverted, Sensing, Feeling,
                        Perceiving. ISFPs adalah individu yang artistik, sensitif, dan bebas
                        yang menghargai keautentikan dan ekspresi diri. Mereka sering
                        memiliki apresiasi yang kuat terhadap keindahan dan tertarik pada
                        kegiatan kreatif. ISFPs introvert tetapi menikmati hubungan yang
                        dalam dan bermakna dengan orang lain. Mereka empatik dan peduli,
                        sering menunjukkan kasih sayang melalui tindakan daripada kata-kata.
                        ISFPs berkembang di lingkungan di mana mereka dapat mengekspresikan
                        diri secara bebas dan mengeksplorasi pengalaman baru. Mereka sering
                        kali dilihat sebagai individu yang lembut dan mudah bergaul, tetapi
                        bisa sangat melindungi nilai dan orang yang mereka cintai. ISFPs
                        mungkin kesulitan dengan rutinitas dan struktur, lebih memilih untuk
                        hidup secara spontan dan mengikuti arus. Mereka adaptif dan dapat
                        dengan mudah menyesuaikan diri dengan situasi baru, menjadikan
                        mereka hebat dalam berimprovisasi dan menemukan solusi kreatif.
                    </p>
                    <h2 class="mt-6 text-3xl md:text-4xl font-bold">Career Path ISFP</h2>

                    <ul class="mt-4 text-base md:text-lg space-y-4">
                        <li>
                            1. Seniman atau Musisi: ISFP memiliki bakat artistik dan menikmati
                            mengekspresikan diri melalui seni.
                        </li>
                        <li>
                            2. Fotografer atau Desainer Grafis: ISFP suka menangkap keindahan
                            di sekitar mereka dan menciptakan karya visual.
                        </li>
                        <li>
                            3. Penjaga Taman atau Konservasionis: ISFP memiliki apresiasi
                            terhadap alam dan senang melindungi lingkungan.
                        </li>
                        <li>
                            4. Terapis Seni atau Penyuluh Sosial: ISFP dapat membantu orang
                            lain melalui kreativitas dan empati mereka.
                        </li>
                        <li>
                            5. Chef atau Ahli Kuliner: ISFP menikmati eksplorasi rasa dan
                            menciptakan makanan yang indah dan lezat.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="absolute inset-0 flex items-center justify-center backdrop-blur-lg">
                <button class="bg-white bg-opacity-70 rounded-full p-4 hover:bg-opacity-100 transition"
                    onclick="location.href='next_steps.html'">
                    <img src="/asset/personality/locked-padlock.png" alt="Key Icon" class="h-12 w-12" />
                </button>
            </div>
        </section>
            {{-- Navbar Start --}}

    @endsection
</body>

<script>
    document
        .getElementById("downloadButton")
        .addEventListener("click", function() {
            const fileUrl = "/asset/personality/ENFJ.pdf";

            const link = document.createElement("a");
            link.href = fileUrl;
            link.download = "ENFJ.pdf";

            document.body.appendChild(link);

            link.click();

            document.body.removeChild(link);
        });
</script>
