<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Confirmation Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #fef5fa;
        }

        .progress-container {
            position: relative;
            margin: 30px auto;
            max-width: 600px;
        }

        .progress-labels {
            position: absolute;
            top: -30px;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .progress-labels span {
            text-align: center;
            font-size: 14px;
            font-weight: bold;
        }

        .confetti-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
            display: none;
            /* Hidden initially */
        }

        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #ffcbf2;
            animation: fall 3s infinite;
            opacity: 0.8;
        }

        @keyframes fall {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }

            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0.2;
            }
        }
    </style>
</head>

<body>
    <!-- Confetti -->
    <div class="confetti-container"></div>

    <div class="container py-5">
        <!-- Header Section -->
        <header class="text-center mb-5">
            <h1 class="fw-bold">
                Pembayaran Paket <span style="color: #ba4e8a">Mentoring</span>
            </h1>
        </header>

        <!-- Progress Bar with Labels -->
        <div class="progress-container">
            <div class="progress-labels">
                <span>Paket</span>
                <span>Pembayaran</span>
                <span style="color: #ba4e8a">Konfirmasi</span>
            </div>
            <div class="progress" style="height: 8px;">
                <div id="progressBar" class="progress-bar" role="progressbar"
                    style="width: 0%; background-color: #ba4e8a;" aria-valuenow="0" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
        </div>

        <!-- Thank You Message -->
        <div class="text-center my-5">
            <h2 class="fw-bold">Terima Kasih Telah Memesan!</h2>
            <p class="text-muted">Your order has been successfully processed.</p>
            <div class="mt-4">
                <img src="asset/payment/PicConfirmation.png" alt="Thank You" class="img-fluid"
                    style="max-width: 300px;" />
            </div>
        </div>

        <!-- Home Button -->
        <div class="text-center mt-4">
            <a href="{{ url('dashboard') }}" class="btn btn-lg" style="background-color: #ba4e8a; color: seashell;">
                Home
            </a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script -->
    <script>
        const progressBar = document.getElementById("progressBar");
        const confettiContainer = document.querySelector(".confetti-container");
        const colors = ["#ffcbf2", "#ff85a1", "#f2789f", "#ba4e8a", "#ffe4e1"];

        // Simulate Progress Bar Animation
        let progress = 0;
        const interval = setInterval(() => {
            progress += 1;
            progressBar.style.width = `${progress}%`;
            progressBar.setAttribute("aria-valuenow", progress);

            if (progress >= 100) {
                clearInterval(interval);
                startConfetti();
            }
        }, 50); // Adjust the speed of progress

        // Start Confetti Animation
        function startConfetti() {
            confettiContainer.style.display = "block";
            for (let i = 0; i < 100; i++) {
                const confetti = document.createElement("div");
                confetti.classList.add("confetti");
                confetti.style.left = `${Math.random() * 100}%`;
                confetti.style.animationDuration = `${Math.random() * 3 + 2}s`;
                confetti.style.backgroundColor =
                    colors[Math.floor(Math.random() * colors.length)];
                confettiContainer.appendChild(confetti);
            }
        }
    </script>
</body>

</html>
