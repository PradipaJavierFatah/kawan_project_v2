@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stress Level Check</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.5.1/dist/flowbite.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
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

        .prev-button {
            background-color: #B94E8A;
        }

        .prev-button:hover {
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
            /* bg-fuchsia-700 */
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

        .indicator-bar {
            display: flex;
            width: 60%;
            height: 30px;
            margin: 20px auto 0;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }

        .bar-section {
            flex: 1;
            height: 100%;
            position: relative;
        }

        .green {
            background-color: green;
        }

        .yellow {
            background-color: yellow;
            /* position: relative; */
        }

        .red {
            background-color: red;
        }

        .score-indicator {
            position: absolute;
            top: -25px;
            width: 50px;
            text-align: center;
            font-size: 12px;
            background-color: white;
            color: black;
            border-radius: 5px;
            padding: 2px;
        }

        .arrow {
            position: absolute;
            left: 50%;
            bottom: -30px;
            /* Adjust this value as needed */
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            /*z-index: 10; /* Ensure it appears on top */
        }

        .arrow .pointer {
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 8px solid rgba(0, 0, 0, 0.664);
            /* Changed to black for better contrast */
        }

        .arrow .label {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            font-size: 12px;
            margin-top: 2px;
            padding: 2px 4px;
            border-radius: 3px;
        }



        .font-kanit {
            font-family: 'Kanit', sans-serif;
        }

        /* Adjustments for the consult button */
        button {
            font-family: 'Kanit', sans-serif;
        }

        /* Hover effect for the consult button */
        button:hover {
            background-color: #6b7280;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
        {{-- Navbar Start --}}
        <nav class="sticky top-0 z-50 bg-white">
        </nav>
        {{-- Navbar End --}}

        @section('content')

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

    <!-- Result Block -->
    <section class="my-4 mx-4 p-4 text-center rounded-lg bg-yellow-400 text-white">
        <div class="ml-8">
            <h1 class="text-4xl">Tingkat Stres Menengah</h1>
            <!-- Indicator Bar -->
            <div class="indicator-bar mx-auto my-4 relative">
                <div class="bar-section green"></div>
                <div class="bar-section yellow"></div>
                <div class="bar-section red"></div>
                <div class="absolute left-80 right-80 w-56 flex justify-center">
                    <div class="flex items-center flex-col">
                        <!-- Arrow pointing to the green bar with "you" text -->
                        <div class="arrow">
                            <span class="label">Anda</span>
                            <div class="pointer"></div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="mt-2 text-xl">Anda berada pada tingkat stres yang rendah. Level stres menengah adalah kondisi
                ketika tubuh terus memproduksi hormon pemicu stres. Hal ini terjadi karena masalah yang dialami
                seseorang tak kunjung selesai. Akibatnya, seseorang yang mengalami level stres menengah menjadi mudah
                tersinggung dan sulit untuk berkonsentrasi.</p>
            <!-- Additional text -->
            <p class="mt-6 text-lg font-kanit">Cara mencegah stres meningkat:</p>
            <p class="mt-1 text-lg font-kanit">1. Atur jadwal Anda dengan baik dan prioritaskan tugas-tugas yang
                penting.</p>
            <p class="mt-1 text-lg font-kanit">2. Luangkan waktu untuk aktivitas relaksasi seperti meditasi, yoga, atau
                pernapasan dalam.</p>
            <p class="mt-1 text-lg font-kanit">3. Pastikan Anda mendapatkan tidur yang cukup setiap malam.</p>
            <p class="mt-1 text-lg font-kanit">4. Makan makanan sehat yang seimbang, termasuk banyak buah, sayuran, dan
                protein.</p>
            <p class="mt-6 text-lg font-kanit">Untuk mencegah tingkat stres semakin meningkat, Anda bisa berkonsultasi
                dengan
                kami!</p>
            <!-- Consult button -->
            <a href="consult">
                <button
                    class="mt-4 px-6 py-3 bg-blue-600 text-white rounded-md transition duration-300 ease-in-out hover:bg-blue-700">
                    Konsultasi
                </button>
            </a>
        </div>
    </section>



    <!-- ARTICLES -->
    <section>
        <div class="text-2xl font-semibold text-center py-5 flex-wrap">
            <span>ARTICLES & NEWS</span>
        </div>

        <div id="container" class="bg-white">
            <div class="p-4">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1">
                    <div id="box" class="bg-gray-100 rounded-lg m-4">
                        <div class="flex justify-center">
                            <img src="asset/home/remaja.png" alt="" class="w-full h-52 rounded-lg bg-center">
                        </div>
                        <div class="p-4">
                            <div class="mt-2 text-md text-black">
                                <span>Article</span>
                            </div>
                            <div class="mt-2 text-xl text-black font-bold">
                                <h3>Mengenal Pentingnya Kesehatan Mental pada Remaja</h3>
                            </div>
                            <div class="mt-4  text-md">
                                <a href="https://yankes.kemkes.go.id/view_artikel/362/mengenal-pentingnya-kesehatan-mental-pada-remaja"
                                    target="_blank"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-primary
             rounded-lg hover:bg-secondary hover:text-white">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="box" class="bg-gray-100 rounded-lg m-4">
                        <div class="flex justify-center">
                            <img src="asset/home/kesmen.webp" alt=""
                                class="w-full h-52 rounded-lg bg-center">
                        </div>
                        <div class="p-4">
                            <div class="mt-2 text-md text-black">
                                <span>Article</span>
                            </div>
                            <div class="mt-2 text-xl text-black font-bold">
                                <h3>Apa Itu Kesehatan Mental? Gejala & Penyebab</h3>
                            </div>
                            <div class="mt-4  text-md">
                                <a href="https://www.halodoc.com/kesehatan/kesehatan-mental" target="_blank"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-primary
             rounded-lg hover:bg-secondary hover:text-white">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="box" class="bg-gray-100 rounded-lg m-4">
                        <div class="flex justify-center">
                            <img src="asset/home/mhawareness.png" alt=""
                                class="w-full lg:h-52 rounded-lg bg-center">
                        </div>
                        <div class="p-4 ">
                            <div class="mt-2 text-md text-black">
                                <span>Article</span>
                            </div>
                            <div class="mt-2 text-xl text-black font-bold">
                                <h3>Memahami Kesehatan Mental dan Cara Penanganannya</h3>
                            </div>
                            <div class="mt-4  text-md">
                                <a href="https://rsj.acehprov.go.id/berita/kategori/artikel/memahami-kesehatan-mental-dan-cara-penanganannya"
                                    target="_blank"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-primary
             rounded-lg hover:bg-secondary hover:text-white">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="box" class="bg-gray-100 rounded-lg m-4">
                        <div class="flex justify-center">
                            <img src="asset/home/artikel4-konsul.jpg" alt=""
                                class="w-full h-52 rounded-lg bg-center">
                        </div>
                        <div class="p-4">
                            <div class="mt-2 text-md text-black">
                                <span>Article</span>
                            </div>
                            <div class="mt-2 text-xl text-black font-bold">
                                <h3>Manfaat Konsultasi Psikologi untuk Kesehatan Mental</h3>
                            </div>
                            <div class="mt-4  text-md">
                                <a href="https://www.alodokter.com/memanfaatkan-konsultasi-psikologi-untuk-meningkatkan-kesehatan-mental#:~:text=Konsultasi%20psikologi%20adalah%20kegiatan%20komunikasi,gangguan%20mental%20yang%20dialami%20pasien."
                                    target="_blank"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-primary
             rounded-lg hover:bg-secondary hover:text-white">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection
</body>

</html>
