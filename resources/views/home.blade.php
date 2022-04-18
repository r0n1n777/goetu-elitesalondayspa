@extends('layout')

@section('title', 'Home - Elite Salon Day Spa')

@section('content')
<div id="home-carousel" class="carousel slide bg-secondary" data-bs-ride="carousel" data-aos="fade-left" data-aos-duration="1000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/home/carousel/1.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-white text-xl text-center">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="https://salons.go3reservation.com/elite-salon-day-spa-53-n-val-vista-drive-suite-103-gilbert-arizona" target="_blank" class="btn btn-primary btn-lg rounded-pill text-secondary text-lg d-flex align-items-center border-secondary shadow">
                    <x-feathericon-calendar/>&nbsp;<b>BOOK ONLINE</b>
                </a>
            </div>
        </div>
        <div class="carousel-item bg-black">
            <img src="{{ asset('images/gallery/store/3.webp') }}" class="opacity-50 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-white text-xl text-center">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="https://salons.go3reservation.com/elite-salon-day-spa-53-n-val-vista-drive-suite-103-gilbert-arizona" target="_blank" class="btn btn-primary btn-lg rounded-pill text-secondary text-lg d-flex align-items-center border-secondary shadow">
                    <x-feathericon-calendar/>&nbsp;<b>BOOK ONLINE</b>
                </a>
            </div>
        </div>
        <div class="carousel-item bg-primary">
            <img src="{{ asset('images/home/carousel/3.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-white text-xl text-center">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="https://salons.go3reservation.com/elite-salon-day-spa-53-n-val-vista-drive-suite-103-gilbert-arizona" target="_blank" class="btn btn-primary btn-lg rounded-pill text-secondary text-lg d-flex align-items-center border-secondary shadow">
                    <x-feathericon-calendar/>&nbsp;<b>BOOK ONLINE</b>
                </a>
            </div>
        </div>
        <div class="carousel-item bg-black">
            <img src="{{ asset('images/gallery/store/10.webp') }}" class="opacity-50 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-white text-xl text-center">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="https://salons.go3reservation.com/elite-salon-day-spa-53-n-val-vista-drive-suite-103-gilbert-arizona" target="_blank" class="btn btn-primary btn-lg rounded-pill text-secondary text-lg d-flex align-items-center border-secondary shadow">
                    <x-feathericon-calendar/>&nbsp;<b>BOOK ONLINE</b>
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/home/carousel/4.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-white text-xl text-center">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="https://salons.go3reservation.com/elite-salon-day-spa-53-n-val-vista-drive-suite-103-gilbert-arizona" target="_blank" class="btn btn-primary btn-lg rounded-pill text-secondary text-lg d-flex align-items-center border-secondary shadow">
                    <x-feathericon-calendar/>&nbsp;<b>BOOK ONLINE</b>
                </a>
            </div>
        </div>
        <div class="carousel-item bg-black">
            <img src="{{ asset('images/gallery/store/6.webp') }}" class="opacity-50 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-white text-xl text-center">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="https://salons.go3reservation.com/elite-salon-day-spa-53-n-val-vista-drive-suite-103-gilbert-arizona" target="_blank" class="btn btn-primary btn-lg rounded-pill text-secondary text-lg d-flex align-items-center border-secondary shadow">
                    <x-feathericon-calendar/>&nbsp;<b>BOOK ONLINE</b>
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/home/carousel/6.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-white text-xl text-center">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="https://salons.go3reservation.com/elite-salon-day-spa-53-n-val-vista-drive-suite-103-gilbert-arizona" target="_blank" class="btn btn-primary btn-lg rounded-pill text-secondary text-lg d-flex align-items-center border-secondary shadow">
                    <x-feathericon-calendar/>&nbsp;<b>BOOK ONLINE</b>
                </a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#home-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="p-5 section-menu">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-4 col-sm-6 col-xs-6" data-tilt>
                <a href="{{ route('promo') }}">
                    <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('images/home/section-menu/giftcard.webp') }}" class="img-fluid">
                        <h3 class="text-secondary">GIFT CARDS</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6" data-tilt>
                <a href="https://salons.go3reservation.com/elite-salon-day-spa-53-n-val-vista-drive-suite-103-gilbert-arizona" target="_blank">
                    <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center border border-secondary shadow-sm rounded" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <img src="{{ asset('images/home/section-menu/book.webp') }}" class="img-fluid">
                        <h3 class="text-secondary"><b>BOOK ONLINE</b></h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6" data-tilt>
                <a href="{{ route('contact') }}">
                    <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <img src="{{ asset('images/home/section-menu/location.webp') }}" class="img-fluid">
                        <h3 class="text-secondary">LOCATION</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6" data-tilt>
                <a href="{{ route('services') }}">
                    <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <img src="{{ asset('images/home/section-menu/cart.webp') }}" class="img-fluid">
                        <h3 class="text-secondary">SERVICES</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6" data-tilt>
                <a href="{{ route('rate') }}/#follow-us">
                    <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center h-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <h3 class="text-secondary border border-secondary rounded-pill p-3">FOLLOW US</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6" data-tilt>
                <a href="{{ route('rate') }}">
                    <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <img src="{{ asset('images/home/section-menu/rate.webp') }}" class="img-fluid">
                        <h3 class="text-secondary">RATE US</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="p-5 bg-warning">
    <div class="container px-0 bg-secondary rounded shadow" data-aos="fade-right" data-aos-duration="1000">
        <div class="p-2 bg-white">
            <h1 class="text-center mb-0">Awards & Achievements</h1>
        </div>
        <img src="{{ asset('images/award.webp') }}" class="img-fluid">
    </div>
</div>

<div class="p-5 bg-warning">
    <div class="container" data-aos="fade-left" data-aos-duration="1000" id="about-us">
        <div class="row bg-white shadow">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 pb-0 p-5 mb-5">
                <h1 class="mont-light text-xl">Elite Salon Experience</h1>
                <p class="mb-0 h5">
                    When walking through our door, you will always have a chance to be served with the best quality and at decent prices. Hundreds of beautiful and stylish nail models along with numerous gel colors and many other beauty services are available for you to choose freely!
                    <br><br>
                    Elite Salon & Day Spa understands that Safety and Sanitation are very important to its customers. Our implements, equipment, and electrical instruments are always thoroughly cleaned and subjected to an approved sanitizing and disinfecting process before being reused. Buffers and files are used only once, then discarded. All pedicure procedures are performed with liner protection. Our staffs were trained to follow a proper sanitization protocol that puts our customer's cleanliness as the number one priority.
                    <br><br>
                    If you're in need of Nails treatments or wish to know why so many Gilbert residents come to Elite Salon & Day Spa, come to visit us today.
                </p>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0">
                <img src="{{ asset('images/home/caption-photo.webp') }}" class="w-100 h-100 caption-photo">
            </div>
        </div>
    </div>
</div>

<div class="p-5 bg-warning">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="text-center">
            <h1 class="mont-light text-xl">Elite Salon Day Spa</h1>
            <div class="row g-3">
                @for ($x = 1; $x <= 6; $x++)
                <div class="col">
                    <a data-fslightbox="gallery" href="{{ asset('images/gallery/manicure/'.$x.'.webp') }}">
                        <img src="{{ asset('images/gallery/manicure/'.$x.'.webp') }}" class="thumbnail rounded-circle">
                    </a>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection