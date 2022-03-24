@extends('layout')

@section('title', 'Promos - Elite Salon Day Spa')

@section('content')
<div id="home-carousel" class="carousel slide bg-secondary" data-bs-ride="carousel" data-aos="fade-left">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/promo/carousel/1.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-black bg-white p-1 rounded-pill">GIFT CARDS AVAILABLE FOR PURCHASE</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BUY GIFT CARDS
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/promo/carousel/2.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-black bg-white p-1 rounded-pill">GIFT CARDS AVAILABLE FOR PURCHASE</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BUY GIFT CARDS
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/promo/carousel/3.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-black bg-white p-1 rounded-pill">GIFT CARDS AVAILABLE FOR PURCHASE</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BUY GIFT CARDS
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/promo/carousel/4.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-black bg-white p-1 rounded-pill">GIFT CARDS AVAILABLE FOR PURCHASE</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BUY GIFT CARDS
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/promo/carousel/5.webp') }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-black bg-white p-1 rounded-pill">GIFT CARDS AVAILABLE FOR PURCHASE</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <a href="" class="btn btn-primary btn-lg rounded-pill text-secondary">
                    BUY GIFT CARDS
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

<div class="p-5 gift-card bg-warning" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('images/promo/balance.webp') }}" class="img-fluid rounded-start sticky-top sticky-offset">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h1 class="card-title text-xl">UNDER MAINTENANCE</h1>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            This service is currently under maintenance and will become available as soon as possible.
                            Stay updated and enjoy our services at the moment.
                        </p>
                        <a href="!#" class="btn btn-primary btn-lg rounded-pill text-secondary">
                            CHECK GIFT CARD BALANCE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="order bg-warning" data-aos="fade-up" data-aos-duration="1000">
    <div class="card border-0">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ asset('images/promo/order.webp') }}" class="img-fluid rounded-start sticky-top sticky-offset">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h1 class="card-title text-xl">UNDER MAINTENANCE</h1>
                    <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                        This service is currently under maintenance and will become available as soon as possible.
                        Stay updated and enjoy our services at the moment.
                    </p>
                    <a href="!#" class="btn btn-primary btn-lg rounded-pill text-secondary">
                        CHECK ORDER STATUS
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection