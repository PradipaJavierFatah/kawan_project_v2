@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stress Level Check</title>
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../src/input.css"> --}}
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }

        .header-gradient {
            background: linear-gradient(to right, #F2789F 50%, #F2789F 100%);
        }

        .next-button {
            background-color: #B94E8A;
        }

        .next-button:hover {
            background-color: #9b3e6e;
        }

        .custom-font {
            font-family: 'Roboto', sans-serif;
        }

        .test-block {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #a21caf;
            color: white;
            padding: 1rem;
            margin: 1rem;
            border-radius: 0.5rem;
            text-align: center;
        }

        .text-container {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-left: 2rem;
        }

        /* Additional Styles */
        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .radio-container input[type="radio"] {
            width: 1.5rem;
            /* Increase the width */
            height: 1.5rem;
            /* Increase the height */
            cursor: pointer;
            transition: background-color 0.2s, transform 0.2s;
        }

        .radio-container input[type="radio"]:hover {
            transform: scale(1.1);
        }

        .radio-container input[type="radio"]:checked {
            background-color: #F2789F;
        }

        .radio-container input[type="radio"]:hover:not(:checked) {
            background-color: #B94E8A;
        }

        .radio-label {
            margin-left: 1rem;
        }

        .custom-radio {
            border: 2px solid gray;
            /* Default border size */
            transition: border-width 0.2s;
            /* Smooth transition */
        }

        .custom-radio:hover {
            border-width: 4px;
            /* Increased border size on hover */
        }
    </style>
</head>


<body class="text-gray-800">
    {{-- <!-- Navbar -->
    <div id="navbar">
        <nav class="bg-primary p-4 flex justify-between items-center">
            <div>
                <a href="home-after">
                    <img src="asset/home/logo.png" alt="Kawan" class="h-12 w-auto">
                </a>
            </div>

            <ul class="lg:flex gap-8 hidden">
                <li class="text-xl font-bold cursor-pointer hover:underline">
                    <a href="home-after">Home</a>
                </li>
                <li class="text-xl font-bold cursor-pointer hover:underline">
                    <a href="#">Services</a>
                </li>
                <li class="text-xl font-bold cursor-pointer hover:underline">
                    <a href="#">Payments</a>
                </li>
            </ul>

            <div class="lg:flex gap-2 hidden">
                <a href="dashboard" class="flex flex-row items-center">
                    <span class="px-4 text-xl font-bold">Yanto</span>
                    <img src="asset/home/profile.png" alt="" class="h-12 w-12 rounded-full">
                </a>
            </div>

            <button id="hamburgToggle" class="lg:hidden block">
                <img src="asset/home/hamburgicon.png" alt="" class="h-8 w-8">
            </button>
        </nav> --}}
                {{-- Navbar Start --}}

                <nav class="sticky top-0 z-50 bg-white">
                    @section('content')
                    </nav>

                    {{-- Navbar End --}}

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden bg-primary">
            <ul class="px-4 py-2">
                <li class="py-2 text-lg font-bold cursor-pointer hover:underline">
                    <a href="home-after">Home</a>
                </li>
                <li class="py-2 text-lg font-bold cursor-pointer hover:underline">
                    <a href="">Services</a>
                </li>
                <li class="py-2 text-lg font-bold cursor-pointer hover:underline">
                    <a href="">Payments</a>
                </li>
            </ul>

            <hr class="border-black m-5">

            <div class="flex px-4 pt-2 pb-4 gap-2">
                <a href="#" class="flex flex-row items-center">
                    <img src="asset/home/profile.png" alt="" class="h-12 w-auto">
                    <span class="px-4 text-lg font-bold">Username</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Personality Test Block -->
    <section class="test-block">
        <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center">
            <!-- Placeholder for Logo -->
            <span><img src="asset/home/stress.png" alt="Stress Logo"></span>
        </div>
        <div class="text-container">
            <h1 class="text-4xl">Stress Level Check</h1>
            <p class="mt-2 text-xl">Cari tahu tingkat stres Anda dan konsultasikan pada ahli</p>
        </div>
    </section>

    <!-- Quote Block -->
    <section class="my-4 mx-4 p-4 bg-gray-100 text-center rounded-lg">
        <p class="text-lg" style="font-family: 'Kanit', sans-serif;">Stres bisa terjadi pada siapa saja dan kapan saja.
            Penyebabnya bisa serius atau sepele. Meski wajar, stres bisa berbahaya bagi kesehatan jika tidak dikelola
            dengan
            baik.</p>
        <p class="text-lg" style="font-family: 'Kanit', sans-serif;">Ayo cek tingkat stresmu di sini!</p>
    </section>

    <!-- Questions Block -->
    <section class="p-1 m-1 rounded-lg bg-white text-center">
        <form>
            <div class="space-y-4">
                <!-- Repeat this block for each question -->
                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Seberapa sering Anda merasa kesal karena sesuatu yang terjadi
                        secara tidak terduga?</p>
                    <div class="flex justify-center items-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q1"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q1"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q1"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q1"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q1"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>

                <!-- End of repeating block -->

                <!-- Duplicate and modify the above block for questions 2-10 -->
                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Seberapa sering Anda merasa tidak mampu mengendalikan hal-hal
                        penting dalam hidup Anda?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q2"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q2"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q2"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q2"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q2"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Seberapa sering Anda merasa gelisah dan stres?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q3"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q3"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q3"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q3"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q3"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Seberapa sering Anda merasa yakin terhadap kemampuan Anda
                        dalam menangani masalah pribadi?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q4"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <input type="radio" name="q4"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q4"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q4"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q4"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Seberapa sering Anda merasa bahwa segala sesuatu berjalan
                        sesuai keinginan Anda?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q5"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <input type="radio" name="q5"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q5"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q5"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q5"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Seberapa sering Anda menemukan bahwa Anda tidak dapat
                        mengatasi segala hal yang harus dilakukan?
                    </p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q6"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q6"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q6"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q6"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q6"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Seberapa sering Anda mampu mengendalikan hal-hal yang
                        mengganggu dalam hidup Anda?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q7"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <input type="radio" name="q7"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q7"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q7"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q7"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Seberapa sering Anda merasa marah karena hal-hal yang terjadi
                        di luar kendali Anda?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q8"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q8"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q8"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q8"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q8"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Seberapa sering Anda merasa ada berbagai kesulitan yang
                        menumpuk begitu banyak sehingga Anda
                        tidak dapat mengatasinya?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q9"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q9"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q9"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q9"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q9"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Seberapa sering Anda merasa tegang atau gelisah dalam sepekan
                        terakhir?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q10"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q10"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q10"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q10"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q10"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Apakah Anda sering mengalami kesulitan tidur atau gangguan tidur
                        lainnya akibat pikiran yang
                        terus-menerus berputar?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q11"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q11"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q11"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q11"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q11"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Apakah Anda sering merasa sulit berkonsentrasi atau merasa terganggu
                        oleh pikiran-pikiran yang tidak
                        diinginkan?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q12"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q12"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q12"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q12"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q12"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Apakah Anda sering merasa kelelahan secara fisik atau mental bahkan
                        setelah istirahat yang cukup?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q13"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q13"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q13"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q13"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q13"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Apakah Anda sering merasa tertekan atau cemas ketika memikirkan masa
                        depan Anda?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q14"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q14"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q14"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q14"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q14"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>

                <div class="bg-pink-200 mx-2 p-4 rounded-lg">
                    <p class="font-bold mb-4 text-center">Apakah Anda sering merasa bahwa stres Anda berdampak pada kesehatan
                        fisik Anda, seperti sakit kepala,
                        gangguan pencernaan, atau ketegangan otot?</p>
                    <div class="flex items-center justify-center space-x-5 mt-3 radio-container">
                        <span>Tidak Pernah</span>
                        <input type="radio" name="q15"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="1" />
                        <input type="radio" name="q15"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="2" />
                        <input type="radio" name="q15"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="3" />
                        <input type="radio" name="q15"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="4" />
                        <input type="radio" name="q15"
                            class="form-radio border-gray-300 custom-radio transform transition duration-150 hover:scale-102"
                            value="5" />
                        <span>Selalu</span>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <div class="flex justify-center m-6">
        <button
            class="next-button px-4 py-2 text-white font-bold rounded-2xl hover:bg-opacity-80 transition duration-300"
            onclick="goToNextPage()">Selesai</button>
    </div>

    <!-- Fun Fact Block -->
    <section class="my-4 mx-4 p-4 bg-gray-100 text-center rounded-lg">
        <p class="text-lg" style="font-family: 'Kanit', sans-serif;">Tahukah Anda bahwa menarik napas dalam-dalam dapat
            menurunkan tingkat stres secara signifikan?</p>
    </section>

    <script>
        function goToNextPage() {
            const questions = document.querySelectorAll('input[type="radio"]');
            const questionNames = new Set();

            questions.forEach(question => {
                questionNames.add(question.name);
            });

            let allAnswered = true;
            let totalScore = 0;

            questionNames.forEach(name => {
                const checkedOption = document.querySelector(`input[name="${name}"]:checked`);
                if (!checkedOption) {
                    allAnswered = false;
                } else {
                    totalScore += parseInt(checkedOption.value);
                }
            });

            if (!allAnswered) {
                alert("Please answer all questions before proceeding.");
            } else {
                if (totalScore >= 15 && totalScore <= 34) {
                    window.location.href = "{{ url('stress-level-result-low') }}";
                } else if (totalScore >= 35 && totalScore <= 55) {
                    window.location.href = "{{ url('stress-level-result-medium') }}";
                } else if (totalScore >= 56 && totalScore <= 75) {
                    window.location.href = "{{ url('stress-level-result-high') }}";
                }
            }
        }
    </script>

    <!-- FOOTER -->
    <footer class="bg-primary mt-5 p-4">
        <div class="flex justify-between">
            <div>
                <a href="homeafter">
                    <img src="asset/home/Logo.png" alt="Kawan" class="h-12 w-auto">
                </a>
            </div>

            <div class="flex flex-row space-x-12">
                <div>
                    <h2 class="text-2xl font-bold">Tentang Kawan</h2>
                    <ul class="text-lg font-semibold py-4">
                        <li class="py-2 hover:underline">
                            <a href="">About Us</a>
                        </li>
                        <li class="py-2 hover:underline">
                            <a href="">Blog</a>
                        </li>
                        <li class="py-2 hover:underline">
                            <a href="">Privacy & Policy</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-bold">Find Us On</h2>
                    <ul class="text-lg font-semibold py-4">
                        <li class="py-2 hover:underline">
                            <a href="https://instagram.com">Instagram</a>
                        </li>
                        <li class="py-2 hover:underline">
                            <a href="https://x.com">Twitter</a>
                        </li>
                        <li class="py-2 hover:underline">
                            <a href="https://facebook.com">Facebook</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <hr class="my-6 border-gray-800">

        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm sm:text-center">© 2023 Kawan™ All Rights Reserved.</span>
            <div class="flex mt-4">
                <a href="https://instagram.com" class="text-black" target="_blank">
                    <img src="asset/home/instagram.png" alt="Instagram" class="h-6 w-6">
                    <span class="sr-only">Instagram page</span>
                </a>
                <a href="https://x.com" class="ms-4 px-4">
                    <img src="asset/home/twitter.png" alt="X" class="h-6 w-6">
                    <span class="sr-only">X page</span>
                </a>
                <a href="https://facebook.com" class="ms-4">
                    <img src="asset/home/facebook.png" alt="Facebook" class="h-6 w-6">
                    <span class="sr-only">Facebook page</span>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>
