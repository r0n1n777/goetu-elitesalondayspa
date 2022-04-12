<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Elite Salon & Day Spa understands that Safety and Sanitation are very important to its customers. Our implements, equipment, and electrical instruments are always thoroughly cleaned and subjected to an approved sanitizing and disinfecting process before being reused. Buffers and files are used only once, then discarded. All pedicure procedures are performed with liner protection. Our staffs were trained to follow a proper sanitization protocol that puts our customer's cleanliness as the number one priority.">
        <meta name="keywords" content="manicure,pedicure,eyelash extensions,body care,nails,spa,gilbert az,nail salon arizona,nail salon gilbert">
        <meta name="theme-color" content="#30261d">
        <meta name="google-site-verification" content="rkGjoXf4iGULmkxU1nZZNJzH-GXyZVf9lPRgBwlhM_s">

        <title>@yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        @livewireStyles
    </head>
    <body class="antialiased bg-primary">
        <div class="d-none d-xl-flex justify-content-center align-items-center bg-primary pt-2">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo-expand.webp') }}" width="300px" data-aos="fade-up">
            </a>
        </div>
        <nav class="navbar navbar-expand-xl navbar-light bg-primary sticky-top">
            <div class="container-fluid">
                <a class="d-block d-md-block d-xl-none navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo-expand.webp') }}" width="200px" data-aos="fade-up">
                </a>
                <a class="d-block d-md-block d-xl-none btn btn-secondary btn-lg" href="https://salons.go3reservation.com/elite-salon-day-spa-53-n-val-vista-drive-suite-103-gilbert-arizona">
                    <x-feathericon-calendar/>
                    <b>BOOK NOW</b>
                </a>
                <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
                    <x-feathericon-menu/> MENU
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="header">
                    <ul class="navbar-nav">
                        <li class="nav-item px-2">
                            <a class="h5 nav-link @if (request()->is('/')) text-white @endif text-secondary" aria-current="page" href="{{ route('home') }}">HOME</a>
                        </li>
                        <li class="nav-item dropdown px-2">
                            <a class="h5 nav-link dropdown-toggle @if (request()->is('gallery/our-salon') || request()->is('gallery/portfolio')) text-white @endif text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">GALLERY</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item h5" href="{{ route('our-salon') }}">
                                    OUR SALON
                                </a>
                                <a class="dropdown-item h5" href="{{ route('portfolio') }}">
                                    PORTFOLIO
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-2">
                            <a class="h5 nav-link dropdown-toggle @if (request()->is('services')) text-white @endif text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item h5" href="{{ route('services') }}#manicure">
                                    MANICURE
                                </a>
                                <a class="dropdown-item h5" href="{{ route('services') }}#pedicure">
                                    PEDICURE
                                </a>
                                <a class="dropdown-item h5" href="{{ route('services') }}#nail-enhancement">
                                    NAIL ENHANCEMENTS
                                </a>
                                <a class="dropdown-item h5" href="{{ route('services') }}#body-care">
                                    BODY CARE
                                </a>
                                <a class="dropdown-item h5" href="{{ route('services') }}#children-services">
                                    CHILDREN SERVICES
                                </a>
                                <a class="dropdown-item h5" href="{{ route('services') }}#eyelash-extensions">
                                    EYELASH EXTENSIONS
                                </a>
                                <a class="dropdown-item h5" href="{{ route('services') }}#additional-services">
                                    ADDITIONAL SERVICES
                                </a>
                            </div>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h5 nav-link @if (request()->is('promo')) text-white @endif text-secondary text-nowrap" aria-current="page" href="{{ route('promo') }}">CURRENT PROMOTIONS</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h5 nav-link @if (request()->is('contact')) text-white @endif text-secondary" aria-current="page" href="{{ route('contact') }}">CONTACT</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h5 nav-link @if (request()->is('rate')) text-white @endif text-secondary" aria-current="page" href="{{ route('rate') }}">REVIEWS</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h5 nav-link @if (request()->is('policy')) text-white @endif text-secondary text-nowrap" aria-current="page" href="{{ route('policy') }}">POLICIES</a>
                        </li>
                        <li class="nav-item px-2">
                            <a href="https://salons.go3reservation.com/elite-salon-day-spa-53-n-val-vista-drive-suite-103-gilbert-arizona" target="_blank" class="btn btn-primary rounded-pill text-secondary d-flex align-items-center border-secondary shadow h5 text-nowrap">
                                <x-feathericon-calendar/>&nbsp;<b>BOOK ONLINE</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            @yield('content')
        </div>

        <footer>
            <div class="container-fluid">
                <div class="row bg-primary pb-5">
                    <div class="col-md-4 col-sm-6 p-5 d-flex justify-content-center align-items-center" data-aos="fade-up">
                        <div class="d-flex flex-column">
                            <a href="{{ route('home') }}/#about-us" class="mb-2 text-decoration-none text-secondary">ABOUT US</a>
                            <a href="{{ route('contact') }}" class="mb-2 text-decoration-none text-secondary">CONTACT US</a>
                            <span class="mb-2 text-secondary">FOLLOW US</span>
                            <div>
                                <a href="https://www.facebook.com/elitesalondayspa/" target="_blank">
                                    <img src="{{ asset('images/facebook.webp') }}" width="30px">
                                </a>
                                <a href="https://www.instagram.com/elitesalonanddayspa/" target="_blank">
                                    <img src="{{ asset('images/instagram.webp') }}" width="30px">
                                </a>
                                <a href="https://www.yelp.com/biz/elite-salon-day-spa-gilbert" target="_blank">
                                    <img src="{{ asset('images/yelp.webp') }}" width="30px">
                                </a>
                                <a href="https://www.google.com/search?source=hp&ei=RhMMW4_SKc3S8wWM-Ido&q=Elite+Salon+Day+Spa+85234&oq=Elite+Salon+Day+Spa+85234&gs_l=psy-ab.3...4284.14973.0.15841.4.3.0.0.0.0.760.943.2j6-1.3.0....0...1c.1.64.psy-ab..1.0.0.0...0.7X1fE7w_cT0#lrd=0x872baeb670a64445:0x6256af26f84fdc6,1,,," target="_blank">
                                    <img src="{{ asset('images/google.webp') }}" width="30px">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 p-5 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="d-flex flex-column">
                            <a href="https://salons.go3reservation.com/elite-salon-day-spa-53-n-val-vista-drive-suite-103-gilbert-arizona" class="mb-2 text-decoration-none text-secondary" target="_blank">BOOK ONLINE</a>
                            <a href="{{ route('policy') }}" class="mb-2 text-decoration-none text-secondary">POLICIES</a>
                            <a href="{{ route('promo') }}" class="mb-2 text-decoration-none text-secondary">PROMOTIONS</a>
                            <a href="{{ route('contact') }}" class="mb-2 text-decoration-none text-secondary">OUR LOCATION</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 p-5 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.webp') }}" width="200px">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="modal fade" id="gift-card" tabindex="-1" role="dialog" aria-labelledby="gift-card" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary rounded-0">
                        <h5 class="modal-title text-white">Gift cards are available!</h5>
                        <button type="button" class="btn text-white close" data-bs-dismiss="modal" aria-label="Close">
                            <x-feathericon-x/>
                        </button>
                    </div>
                    <div class="modal-body d-flex flex-column align-items-center bg-warning">
                        <h5 class="text-center"><b>Please visit our salon to purchase your gift cards!</b></h5>
                        <img src="{{ asset('images/gift-card.webp') }}" class="w-75 shadow-lg">
                    </div>
                    <div class="modal-footer bg-primary rounded-0"></div>
                </div>
            </div>
        </div>

        <a class="back-to-top p-2 bg-primary text-white border border-secondary rounded d-none text-decoration-none" href="#">
            <x-feathericon-chevron-up/> Back to top
        </a>

        @if (Auth::check())
        <div class="bg-danger text-white p-2 d-flex justify-content-between align-items-center w-100 fixed-bottom">
            <span>You are logged in as Administrator.</span>
            <a class="btn btn-primary" href="{{ route('admin-dashboard') }}">
                <x-feathericon-menu/> Dashboard
            </a>
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-primary">
                    <x-feathericon-log-out/> Logout
                </button>
            </form>
        </div>
        @endif

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>

        @if (request()->is('promo'))
        <script>
            $(function(){
                $('#gift-card').modal('show');
            });
        </script>
        @endif

        @livewireScripts
    </body>
</html>
