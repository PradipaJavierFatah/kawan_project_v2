<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom dark theme */
        body {
            background-color: #19012C;
            color: #ffffff;
        }

        .navbar-light {
            background-color: #212529;
        }

        .navbar-light .navbar-brand,
        .navbar-light .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-light .navbar-nav .nav-link.active {
            color: #0d6efd;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #0d6efd;
        }

        .footer {
            background-color: #212529;
            color: #ffffff;
        }

        .footer a {
            color: #ffffff;
        }

        .footer a:hover {
            color: #0d6efd;
        }
    </style>
</head>

<body>
    <div class="">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
                <a href="dashboard" class="navbar-brand">
                    <img src="{{ asset('asset/home/logo.png') }}" class="h-8" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transactions">Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dashboard
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Content Start -->
            <div class="col w-100">
                @yield('konten')
                <H1>Testing</H1>
                <H1>Testing</H1>
                <H1>Testing</H1>
                <H1>Testing</H1>
                <H1>Testing</H1>
            </div>
        <!-- Content End -->

        <!-- Footer Start -->
        <footer class="footer text-center text-lg-start">
            <div class="container p-4">
                <section>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <h5 class="text-uppercase">YourSite</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <h5 class="text-uppercase">Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-light">Home</a></li>
                                <li><a href="#" class="text-light">About</a></li>
                                <li><a href="#" class="text-light">Services</a></li>
                                <li><a href="#" class="text-light">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4">
                            <h5 class="text-uppercase">Contact</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-light">Email: info@yoursite.com</a></li>
                                <li><a href="#" class="text-light">Phone: +123 456 7890</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
        <!-- Footer End -->
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
