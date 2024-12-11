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

<body>
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
                        <p class="font-bold mb-4 text-center">Apakah Anda sering mengalami kesulitan tidur atau gangguan
                            tidur
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
                        <p class="font-bold mb-4 text-center">Apakah Anda sering merasa sulit berkonsentrasi atau merasa
                            terganggu
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
                        <p class="font-bold mb-4 text-center">Apakah Anda sering merasa kelelahan secara fisik atau mental
                            bahkan
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
                        <p class="font-bold mb-4 text-center">Apakah Anda sering merasa tertekan atau cemas ketika
                            memikirkan masa
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
                        <p class="font-bold mb-4 text-center">Apakah Anda sering merasa bahwa stres Anda berdampak pada
                            kesehatan
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
            <p class="text-lg" style="font-family: 'Kanit', sans-serif;">Tahukah Anda bahwa menarik napas dalam-dalam
                dapat
                menurunkan tingkat stres secara signifikan?</p>
        </section>

    @endsection
</body>

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

</html>
