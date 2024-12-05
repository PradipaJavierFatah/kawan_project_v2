{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kawan - Login</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        @keyframes spinSlow {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes floatUpDown {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .animate-spin-float {
            animation: spinSlow 20s linear infinite, floatUpDown 5s ease-in-out infinite;
        }
    </style>

</head>

<body>
    <div class="hidden md:block absolute inset-y-0 right-0 w-1/2  z-0"></div>
    <div class="bg-cover bg-center bg-no-repeat min-h-screen"
        style="background-image: url('{{ asset('asset/login/bg.png') }}');">
        {{-- Login Start --}}
        <section id="Login" class="pt-32 pb-0">
            <div class="container mx-auto flex">
                <div class="w-full lg:w-1/2 px-4">
                    <div class="w-full lg:w-2/3 p-6 mx-auto">
                        <img src="asset/home/Logo.png" alt="Logo" width="250">
                        <h1 class="text-white text-2xl my-4 font-Kanit font-semibold">Hai Selamat Datang Kawan!</h1>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="grid gap-6 mb-2">
                                <!-- Email Address -->
                                <div class="mb-0">
                                    <x-input-label for="email" :value="__('Email')" class="font-Kanit text-white" />
                                    <x-text-input id="email"
                                        class="block mt-1 w-full font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                        type="email" name="email" :value="old('email')" required autofocus
                                        autocomplete="username" placeholder="Masukan email kamu..." />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                {{-- <div class="mb-0">
                                <x-input-label for="password" :value="__('Password')" class="font-Kanit" />
                                <x-text-input id="password" class="block mt-1 w-full font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" type="password" name="password" required autocomplete="current-password" placeholder="Masukan password kamu..." />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <div class="flex justify-end">
                                    <h1 class="text-sm text-sky-600 cursor-pointer mb-0 mt-2"><a href="{{ route('password.request') }}">{{ __('Lupa password?') }}</a></h1>
                                </div>
                            </div> --}}
                                <!-- Password -->
                                <div class="mb-0 relative">
                                    <x-input-label for="password" :value="__('Password')" class="font-Kanit text-white" />
                                    <div class="relative">
                                        <x-text-input id="password"
                                            class="block mt-1 w-full font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                            type="password" name="password" required autocomplete="current-password"
                                            placeholder="Masukan password kamu..." />
                                        <i class="fas fa-eye absolute top-3 right-3 cursor-pointer text-gray-500"
                                            onclick="togglePassword('password')"></i>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    <div class="flex justify-end">
                                        <h1 class="text-sm text-sky-600 cursor-pointer mb-0 mt-2"><a
                                                href="{{ route('password.request') }}">{{ __('Lupa password?') }}</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center font-Kanit">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ms-2 text-sm text-white">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-start mt-4">
                                <x-primary-button
                                    class="font-Kanit text-white bg-secondery hover:bg-secondery-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-base w-full sm:w-auto px-8 py-2.5 text-center hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>

                        <div class="flex justify-center mt-16 text-white">
                            <h1>Belum memiliki akun? <a href={{ route('register') }}><span
                                        class="cursor-pointer underline">Daftar disini</span></a></h1>
                        </div>
                    </div>
                </div>
                <!-- Gambar Animasi -->
                <div class="hidden lg:block w-1/2 flex items-center justify-center z-10">
                    <img src="asset/login/planet.png" alt="Gambar Login" class="mx-auto pt-12 animate-spin-float"
                        width="500">
                </div>
            </div>
        </section>
    </div>
    {{-- Login End --}}

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            window.location.href = 'home'; // Redirect to the home page
        });

        function togglePassword(id) {
            const input = document.getElementById(id);
            const icon = input.nextElementSibling;
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
