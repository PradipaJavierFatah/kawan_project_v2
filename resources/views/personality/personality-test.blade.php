<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stress Level Check</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/personality/output.css') }}">

    <link href="output.css" rel="stylesheet" />
    <link rel="stylesheet" href="coba.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
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
    <!-- Navbar -->
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
                    <a href="home-after">Services</a>
                </li>
                <li class="text-xl font-bold cursor-pointer hover:underline">
                    <a href="plans-login">Payments</a>
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
        </nav>

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
    {{-- Navbar End --}}

    {{-- Konten Start --}}
    <section class="bg-purple-300 p-8 flex items-center">
      <div class="flex items-center">
        <img
          src="/asset/personality/Designer.png"
          alt="Logo"
          class="w-45 h-40"
        />
        <div class="ml-4 text-white">
          <h1 class="text-6xl font-bold">Personality Test</h1>
          <p class="mt-3 text-3xl">Find your personality and enjoy</p>
        </div>
      </div>
    </section>

    <section class="p-6 bg-[#f2789f]">
      <p class="text-center text-lg font-bold">
        Your honest answers will help us understand you better
      </p>
    </section>

    <section class="mx-4">
      <div class="space-y-4">
        <div
          class="bg-question-colour p-10 rounded-lg flex flex-col items-center"
        >
          <p class="font-bold mb-4 text-center">
            Saya merasa senang untuk menginisiasi percakapan dengan individu
            baru di sekitar saya
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
            type="radio"
            name="question1"
            class="form-radio text-pink-600 custom-radio"
            value="1"
          />
          <input
            type="radio"
            name="question2"
            class="form-radio text-pink-600 custom-radio"
            value="2"
          />
          <input
            type="radio"
            name="question2"
            class="form-radio text-pink-600 custom-radio"
            value="3"
          />
          <input
            type="radio"
            name="question1"
            class="form-radio text-pink-600 custom-radio"
            value="4"
          />
          <input
            type="radio"
            name="question1"
            class="form-radio text-pink-600 custom-radio"
            value="5"
          />
            <span>TRUE</span>
          </div>
        </div>
        <div class="bg-white p-10 rounded-lg flex flex-col items-center">
          <p class="font-bold mb-4 text-center">
            Saya memiliki dorongan yang kuat untuk segera bertindak ketika ada
            sesuatu yang perlu dilakukan
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question2"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question2"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question2"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question2"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question2"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div
          class="bg-question-colour p-10 rounded-lg flex flex-col items-center"
        >
          <p class="font-bold mb-4 text-center">
            Saya dapat dengan mudah tersentuh emosional dan menangis ketika
            terharu
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question3"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question3"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question3"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question3"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question3"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div class="bg-white p-10 rounded-lg flex flex-col items-center">
          <p class="font-bold mb-4 text-center">
            Kemampuan saya untuk empati memungkinkan saya merasakan perasaan
            orang lain seolah-olah itu adalah perasaan saya sendiri
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question4"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question4"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question4"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question4"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question4"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div
          class="bg-question-colour p-10 rounded-lg flex flex-col items-center"
        >
          <p class="font-bold mb-4 text-center">
            Saya memiliki keterampilan untuk mengubah ide yang kurang menarik
            menjadi ide yang menarik
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question5"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question5"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question5"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question5"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question5"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div class="bg-white p-10 rounded-lg flex flex-col items-center">
          <p class="font-bold mb-4 text-center">
            Saya senang bekerja di dalam tim dan merasa nyaman berbagi tanggung
            jawab
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question6"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question6"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question6"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question6"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question6"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div
          class="bg-question-colour p-10 rounded-lg flex flex-col items-center"
        >
          <p class="font-bold mb-4 text-center">
            Saya sering memikirkan dampak jangka panjang dari tindakan saya
            sebelum saya mengambil keputusan
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question7"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question7"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question7"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question7"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question7"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div class="bg-white p-10 rounded-lg flex flex-col items-center">
          <p class="font-bold mb-4 text-center">
            Saya cenderung menyelesaikan tugas sesuai dengan rencana dan jadwal
            yang telah ditetapkan
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question8"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question8"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question8"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question8"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question8"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div
          class="bg-question-colour p-10 rounded-lg flex flex-col items-center"
        >
          <p class="font-bold mb-4 text-center">
            Saya memiliki kecenderungan untuk mengeksplorasi ide-ide baru dan
            inovatif
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question9"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question9"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question9"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question9"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question9"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div class="bg-white p-10 rounded-lg flex flex-col items-center">
          <p class="font-bold mb-4 text-center">
            Saya merasa nyaman bekerja dengan angka dan analisis data
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question10"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question10"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question10"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question10"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question10"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
      </div>
    </section>

    <section class="mx-4">
      <div class="space-y-4">
        <div
          class="bg-question-colour p-10 rounded-lg flex flex-col items-center"
        >
          <p class="font-bold mb-4 text-center">
            Saya memiliki keberanian untuk berhadapan langsung dalam
            berkomunikasi dengan orang lain
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question11"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question11"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question11"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question11"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question11"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div class="bg-white p-10 rounded-lg flex flex-col items-center">
          <p class="font-bold mb-4 text-center">
            Saya selalu berusaha untuk mencapai posisi teratas atau nomor satu
            dalam segala hal yang saya lakukan
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question12"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question12"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question12"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question12"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question12"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div
          class="bg-question-colour p-10 rounded-lg flex flex-col items-center"
        >
          <p class="font-bold mb-4 text-center">
            Kebahagiaan saya terletak pada membantu orang lain mencapai
            kesuksesan
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question13"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question13"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question13"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question13"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question13"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div class="bg-white p-10 rounded-lg flex flex-col items-center">
          <p class="font-bold mb-4 text-center">
            Jika saya melakukan kesalahan, saya akan berkomitmen untuk
            memperbaikinya tanpa memedulikan waktu atau biaya yang diperlukan
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question14"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question14"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question14"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question14"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question14"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div
          class="bg-question-colour p-10 rounded-lg flex flex-col items-center"
        >
          <p class="font-bold mb-4 text-center">
            Saya memiliki rasa ingin tahu yang besar terhadap berbagai hal di
            sekitar saya
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question15"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question15"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question15"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question15"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question15"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div class="bg-white p-10 rounded-lg flex flex-col items-center">
          <p class="font-bold mb-4 text-center">
            Kemampuan saya untuk dengan cepat mengidentifikasi penyebab masalah
            yang tidak dapat ditemukan orang lain merupakan kekuatan saya
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question16"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question16"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question16"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question16"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question16"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div
          class="bg-question-colour p-10 rounded-lg flex flex-col items-center"
        >
          <p class="font-bold mb-4 text-center">
            Saya memiliki standar yang tinggi dalam segala hal yang saya lakukan
            dan tidak puas dengan hasil yang hanya rata-rata, saya selalu
            berusaha untuk mencapai yang terbaik
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question17"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question17"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question17"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question17"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question17"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div class="bg-white p-10 rounded-lg flex flex-col items-center">
          <p class="font-bold mb-4 text-center">
            Saya menikmati waktu untuk merenung dan mencari inspirasi dari
            pikiran saya sendiri
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question18"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question18"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question18"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question18"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question18"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div
          class="bg-question-colour p-10 rounded-lg flex flex-col items-center"
        >
          <p class="font-bold mb-4 text-center">
            Saya yakin bahwa membantu orang lain juga akan membawa manfaat bagi
            diri saya sendiri
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question19"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question19"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question19"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question19"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question19"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
        <div class="bg-white p-10 rounded-lg flex flex-col items-center">
          <p class="font-bold mb-4 text-center">
            Saya merasa bahagia ketika dapat berbagi ide dan inspirasi dengan
            orang lain
          </p>
          <div class="flex items-center space-x-4">
            <span>FALSE</span>
            <input
              type="radio"
              name="question20"
              class="form-radio text-pink-600 custom-radio"
              value="1"
            />
            <input
              type="radio"
              name="question20"
              class="form-radio text-pink-600 custom-radio"
              value="2"
            />
            <input
              type="radio"
              name="question20"
              class="form-radio text-pink-600 custom-radio"
              value="3"
            />
            <input
              type="radio"
              name="question20"
              class="form-radio text-pink-600 custom-radio"
              value="4"
            />
            <input
              type="radio"
              name="question20"
              class="form-radio text-pink-600 custom-radio"
              value="5"
            />
            <span>TRUE</span>
          </div>
        </div>
      </div>
    </section>

    <section class="my-4">
      <div class="flex justify-center items-center">
        <div class=" md:flex items-center space-x-30 relative">
          <div class="flex flex-col items-center">
            <div class="w-10 h-10 bg-progress-colour rounded-full"></div>
            <p class="text-progress-colour mt-2">LET'S GO</p>
          </div>

          <div class="w-96 h-1 bg-progress-colour mb-6"></div>

          <div class="flex flex-col items-center">
            <div class="w-10 h-10 bg-black rounded-full"></div>
            <p class="text-black mt-2">CONGRATS</p>
          </div>
        </div>
      </div>
    </section>

    <section class="text-center mt-6 mb-6">
      <button
        id="submitBtn"
        class="bg-[#F2789F] text-white py-2 px-4 rounded-lg transition-transform transform hover:scale-110 hover:bg-pink-700"
        onclick="calculateMerit()"
      >
        NEXT ->
      </button>
    </section>

    <section class="flex justify-center mt-6 mb-10">
      <p id="result" class="text-3xl font-bold"></p>
    </section>

    <script>
      function calculateMerit() {
        const questions = document.querySelectorAll(
          "input[type='radio']:checked"
        );
        const totalQuestions = 20;

        if (questions.length < totalQuestions) {
          alert("Please answer all questions before submitting.");
          return;
        }

        let totalMerit = 0;

        questions.forEach((question) => {
          totalMerit += parseInt(question.value, 10);
        });

        if (totalMerit >= 20 && totalMerit <= 40) {

          window.location.href = "{{ url('ENTP') }}"

        } else if (totalMerit > 40 && totalMerit <= 60) {
          window.location.href = "{{ url('ISFP') }}"

        } else if (totalMerit > 60 && totalMerit <= 75) {
          window.location.href = "{{ url('INTP') }}"
        } else if (totalMerit > 75 && totalMerit <= 85) {
          window.location.href = "{{ url('ESFP') }}"

        } else if (totalMerit > 85 && totalMerit <= 100) {
          window.location.href = "{{ url('ENFJ') }}"
        }
      }
    </script>

    <section class="bg-[#FAEFF3] p-6">
      <div class="text-left text-4xl text-gray-800 font-bold">
        Did you know??
      </div>
      <p class="font-bold mt-2 text-lg text-[#F2789F]">
        This week, a staggering
        <span class="text-[#B94E8A]">1,233,013</span> people have embarked on
        the journey of self-discovery by completing personality tests, setting a
        vibrant example for others to explore their own personalities.
      </p>
    </section>

    <section class="bg-white p-10 rounded-lg mx-4">
      <p class="text-center text-lg font-bold">
        Leading your life honestly <br />
        and truthfully will create <br />
        trust and friendship
      </p>
    </section>
    {{-- Konten End --}}
  

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