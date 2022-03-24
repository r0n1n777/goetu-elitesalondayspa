<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="d-none d-lg-flex justify-content-center align-items-center bg-primary pt-2">
            <img src="{{ asset('images/logo-expand.webp') }}" width="300px" data-aos="fade-up">
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary sticky-top">
            <div class="container-fluid">
                <a class="d-block d-md-block d-lg-none navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo-expand.webp') }}" width="200px" data-aos="fade-up">
                </a>
                <a class="d-block d-md-block d-lg-none btn btn-secondary btn-lg" href="">
                    <x-feathericon-calendar/>
                    <b>BOOK NOW</b>
                </a>
                <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bg-secondary"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="header">
                    <ul class="navbar-nav">
                        <li class="nav-item px-2">
                            <a class="h4 nav-link @if (request()->is('/')) text-white @endif text-secondary" aria-current="page" href="{{ route('home') }}">HOME</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h4 nav-link text-secondary" aria-current="page" href="">BOOK ONLINE</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h4 nav-link @if (request()->is('shop')) text-white @endif text-secondary" aria-current="page" href="{{ route('shop') }}">SHOP</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h4 nav-link @if (request()->is('services')) text-white @endif text-secondary" aria-current="page" href="{{ route('services') }}">SERVICES</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h4 nav-link @if (request()->is('promo')) text-white @endif text-secondary" aria-current="page" href="{{ route('promo') }}">PROMO</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h4 nav-link @if (request()->is('contact')) text-white @endif text-secondary" aria-current="page" href="{{ route('contact') }}">CONTACT</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h4 nav-link @if (request()->is('rate')) text-white @endif text-secondary" aria-current="page" href="{{ route('rate') }}">RATE US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')

        <footer>
            <div class="container-fluid">
                <div class="row bg-primary pb-5">
                    <div class="col-md-4 col-sm-6 p-5 d-flex justify-content-center align-items-center" data-aos="fade-up">
                        <div class="d-flex flex-column">
                            <a href="{{ route('about') }}" class="mb-2 text-decoration-none text-secondary">ABOUT US</a>
                            <a href="{{ route('contact') }}" class="mb-2 text-decoration-none text-secondary">CONTACT US</a>
                            <span class="mb-2 text-secondary">FOLLOW US</span>
                            <div>
                                <img src="{{ asset('images/facebook.webp') }}" width="30px">
                                <img src="{{ asset('images/instagram.webp') }}" width="30px">
                                <img src="{{ asset('images/yelp.webp') }}" width="30px">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 p-5 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="d-flex flex-column">
                            <a href="" class="mb-2 text-decoration-none text-secondary">BOOK ONLINE</a>
                            <a href="{{ route('shop') }}" class="mb-2 text-decoration-none text-secondary">SHOP</a>
                            <a href="{{ route('promo') }}" class="mb-2 text-decoration-none text-secondary">PROMOTIONS</a>
                            <a href="{{ route('about') }}" class="mb-2 text-decoration-none text-secondary">OUR LOCATION</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 p-5 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('images/logo.webp') }}" width="200px">
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
