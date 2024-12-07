<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plans and Pricing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plans and Pricing</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">

    <style>
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 100;
        }

        .card {
            background-color: #343a40; /* Dark gray */
            color: white; /* White text */
            transition: transform 0.3s, background-color 0.3s, color 0.3s;
            height: 500px; /* Fixed height */
            width: 22%; /* Responsive width */
            min-width: 280px; /* Prevent shrinking too small */
            flex-grow: 1; /* Allow cards to expand evenly */
            margin: 0 10px; /* Add horizontal spacing */
        }

        .card:hover {
            background-color: #f4c2c2; /* Light pink */
            color: black; /* Black text */
            transform: translateY(-10px);
        }

        .list-group {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Even spacing between items */
        }

        .list-group-item {
            border: none; /* Remove borders */
            background-color: transparent; /* Make background transparent */
            color: inherit; /* Keep text color consistent */
            flex-grow: 1; /* Stretch items evenly */
            display: flex;
            align-items: center; /* Vertically align text */
            justify-content: center; /* Horizontally align text */
            padding: 0.5rem; /* Add some padding */
        }

        .list-group-item + .list-group-item {
            border-top: 1px solid rgba(255, 255, 255, 0.1); /* Subtle separator line */
        }

        .card .card-header {
            font-size: 1.25rem;
        }

        .card-title {
            font-size: 1.75rem;
        }

        .container {
            text-align: center; /* Center text inside container */
        }

        /* Fade-in + Slide-up animation for the entire card */
.card {
    opacity: 0;
    transform: translateY(20px); /* Initially position the card below */
    animation: fadeUp 0.5s forwards;
    animation-delay: 0.3s; /* Delay the animation for a smooth appearance */
}

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    </style>
</head>

<body>
    <div class="container py-5">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary back-button">
            Back
        </a>
        <div class="text-center mb-4">
            <h2 class="fw-bold">Mentor List</h2>
        </div>

        <!-- Mentor List (Paginated) -->
        <div id="mentor-list" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($mentors as $mentor)
            <div class="col">
                <div class="card h-100">
                    <div class="card-img-wrapper" style="position: relative; padding-top: 133.33%; overflow: hidden;">
                        <img src="{{ asset($mentor->picture) }}" class="card-img-top" alt="{{ $mentor->name }}" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; height: auto;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $mentor->name }}</h5>
                        <p class="card-text">Age: {{ $mentor->age }}</p>
                        <p class="card-text">{{ $mentor->description }}</p>


                </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-4">
            {{ $mentors->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1>
                <span>Rencana</span>
                <span style="color: #ba4e8a;">Terbaik</span>
                <span>untuk Konsultasi</span>
            </h1>
        </div>
        <div class="d-flex flex-wrap justify-content-center g-4">
            <!-- Paket Dasar -->
            <div class="card text-center">
                <div class="card-header">Paket Dasar</div>
                <div class="card-body d-flex flex-column">
                    <h2 class="card-title">Rp50K<span class="fs-6">/bulan</span></h2>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">1 sesi per bulan</li>
                        <li class="list-group-item">Akses ke sumber daya</li>
                        <li class="list-group-item">Dukungan melalui email</li>
                    </ul>
                    <button class="btn w-100 mt-auto" style="background-color: #ba4e8a;color:mintcream;" onclick="redirect1(event)">Pesan Sekarang</button>
                </div>
            </div>
            <!-- Paket Standar -->
            <div class="card text-center">
                <div class="card-header">Paket Standar</div>
                <div class="card-body d-flex flex-column">
                    <h2 class="card-title">Rp150K<span class="fs-6">/bulan</span></h2>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">2 sesi per bulan</li>
                        <li class="list-group-item">Dukungan email prioritas</li>
                        <li class="list-group-item">Pelacakan kemajuan</li>
                    </ul>
                    <button class="btn w-100 mt-auto" style="background-color: #ba4e8a;color:mintcream;" onclick="redirect2(event)">Pesan Sekarang</button>
                </div>
            </div>
            <!-- Paket Premium -->
            <div class="card text-center">
                <div class="card-header">Paket Premium</div>
                <div class="card-body d-flex flex-column">
                    <h2 class="card-title">Rp250K<span class="fs-6">/bulan</span></h2>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">4 sesi per bulan</li>
                        <li class="list-group-item">Dukungan prioritas</li>
                        <li class="list-group-item">Rencana yang dipersonalisasi</li>
                    </ul>
                    <button class="btn w-100 mt-auto" style="background-color: #ba4e8a;color:mintcream;" onclick="redirect3(event)">Pesan Sekarang</button>
                </div>
            </div>
            <!-- Paket Ultimate -->
            <div class="card text-center">
                <div class="card-header">Paket Ultimate</div>
                <div class="card-body d-flex flex-column">
                    <h2 class="card-title">Rp350K<span class="fs-6">/bulan</span></h2>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">Sesi tanpa batas per bulan</li>
                        <li class="list-group-item">Dukungan 24/7</li>
                        <li class="list-group-item">Webinar bulanan</li>
                    </ul>
                    <button class="btn w-100 mt-auto" style="background-color: #ba4e8a; color:mintcream;" onclick="redirect4(event)">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function redirect1(event) {
            event.preventDefault();
            window.location.href = "{{ url('checkout-pembayaran-1') }}";
        }

                function redirect2(event) {
                    event.preventDefault();
                    window.location.href = "{{ url('checkout-pembayaran-2') }}";
                }

                function redirect3(event) {
                    event.preventDefault();
                    window.location.href = "{{ url('checkout-pembayaran-3') }}";
                }

                function redirect4(event) {
                    event.preventDefault();
                    window.location.href = "{{ url('checkout-pembayaran-4') }}";
                }
            </script>
    </body>

    </html>
