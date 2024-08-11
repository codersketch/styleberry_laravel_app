<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Styleberry</title>
    <link rel="shortcut icon" href="{{ URL('images/logo2.png') }}" type="image/x-icon">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- icon     --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>

<body class="" style="padding: 60px 0px 0px 0px">
    <button type="button" class="btn btn-light btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    {{-- navbar start  --}}
    <nav class="navbar navbar-expand-lg bg-gradient shadow fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand " href="/">
                <img src="{{ URL('images/logo.png') }}" alt="Bootstrap" width="auto" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

                    <li class="nav-item">
                        <x-nav-link :active="request()->is('about')" href="about">About</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link :active="request()->is('saloon')" href="saloon">Saloon</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link :active="request()->is('services')" href="services">Services</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link :active="request()->is('contact')" href="contact">Contact Us</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link :active="request()->is('testimonials')" href="testimonials">Testimonials</x-nav-link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="careers">Careers</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-white" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 bg-dark-subtle border" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    {{-- navbar end  --}}

    <div class="container-fluid text-white p-0 m-0">
        {{ $heading }}
    </div>
    <div class="container-fluid text-white p-0 m-0 my-5">
        {{ $content }}
    </div>

    
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-gradient  ">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div class="">
                <a href="" class="text-decoration-none me-4 ">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-decoration-none me-4 ">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-decoration-none me-4 ">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-decoration-none me-4 ">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-decoration-none me-4 ">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-decoration-none me-4 ">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-start text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        {{-- <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>
                            Styleberry
                        </h6> --}}
                        <a class="navbar-brand " href="/">
                            <img src="{{ URL('images/logo.png') }}" alt="Bootstrap" width="auto" height="40">
                        </a>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-6 col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-decoration-none text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-decoration-none text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-decoration-none text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-decoration-none text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-6 col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-decoration-none text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-decoration-none text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-decoration-none text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-decoration-none text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-12 col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-reset fw-bold text-decoration-none" href="admin">Styleberry</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
