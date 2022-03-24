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
                <h1 class="text-white">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BOOK ONLINE
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/gallery/store/3.webp') }}" class="d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-dark bg-white p-1 rounded">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BOOK ONLINE
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/home/carousel/2.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-white">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BOOK ONLINE
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/gallery/store/6.webp') }}" class="d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-dark bg-white p-1 rounded">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BOOK ONLINE
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/home/carousel/3.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-white">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BOOK ONLINE
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/gallery/store/10.webp') }}" class="d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-dark bg-white p-1 rounded">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BOOK ONLINE
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/home/carousel/4.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-white">BOOK AN APPOINTMENT</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BOOK ONLINE
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
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('images/home/section-menu/giftcard.webp') }}" class="img-fluid">
                    <h3 class="text-secondary">GIFT CARDS</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <img src="{{ asset('images/home/section-menu/book.webp') }}" class="img-fluid">
                    <h3 class="text-secondary">BOOK ONLINE</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ asset('images/home/section-menu/location.webp') }}" class="img-fluid">
                    <h3 class="text-secondary">LOCATION</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <img src="{{ asset('images/home/section-menu/cart.webp') }}" class="img-fluid">
                    <h3 class="text-secondary">SHOP</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center h-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <h3 class="text-secondary border border-secondary rounded-pill p-3">FOLLOW US</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="bg-primary rounded p-1 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <img src="{{ asset('images/home/section-menu/rate.webp') }}" class="img-fluid">
                    <h3 class="text-secondary">RATE US</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="p-5 bg-warning" data-aos="fade-left" data-aos-duration="1000">
    <div class="container">
        <div class="row bg-white g-3">
            <div class="col-md-6 col-sm-12 p-3">
                <h1 class="mont-light text-xl">Elite Salon Experience</h1>
                <p>When walking through our door, you will always have a chance to be served with the best quality and at decent prices. Hundreds of beautiful and stylish nail models along with numerous gel colors and many other beauty services are available for you to choose freely!
                    Elite Salon & Day Spa understands that Safety and Sanitation are very important to its customers. Our implements, equipment, and electrical instruments are always thoroughly cleaned and subjected to an approved sanitizing and disinfecting process before being reused. Buffers and files are used only once, then discarded. All pedicure procedures are performed with liner protection. Our staffs were trained to follow a proper sanitization protocol that puts our customer’s cleanliness as the number one priority.
                    If you're in need of Nails treatments or wish to know why so many Gilbert residents come to Elite Salon & Day Spa, come to visit us today.</p>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
                <img src="{{ asset('images/home/caption-photo.webp') }}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="p-5 bg-warning" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="text-center">
            <h1 class="mont-light text-xl">Elite Salon Day Spa</h1>
            <div class="row g-3">
                @for ($x = 1; $x <= 6; $x++)
                <div class="col">
                    <a data-fslightbox="gallery" href="{{ asset('images/gallery/manicure/'.$x.'.webp') }}">
                        <img src="{{ asset('images/gallery/manicure/'.$x.'.webp') }}" class="rounded-thumbnail rounded-circle">
                    </a>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection