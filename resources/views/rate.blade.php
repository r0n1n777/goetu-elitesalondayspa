@extends('layout')

@section('title', 'Rate Us - Elite Salon Day Spa')

@section('content')
<div class="p-5 rate-header bg-dark" data-aos="fade-left">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center p-3">
            <h1 class="text-xl text-white">RATE OUR SERVICES</h1>
        </div>
    </div>
</div>

<div class="p-5 rate bg-secondary" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row justify-content-center">
            <div class="w-75">
                <p class="h3 font-weight-bold text-black text-center">
                    We would very much appreciate it if you would please take a few minutes today to share your experience.<br>
                    This feedback helps us improve our ability to provide you with the best service possible.
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <img src="{{ asset('images/rate/star.webp') }}" class="rate-star" id="1" width="120px">
            <img src="{{ asset('images/rate/star.webp') }}" class="rate-star" id="2" width="120px">
            <img src="{{ asset('images/rate/star.webp') }}" class="rate-star" id="3" width="120px">
            <img src="{{ asset('images/rate/star.webp') }}" class="rate-star" id="4" width="120px">
            <img src="{{ asset('images/rate/star.webp') }}" class="rate-star" id="5" width="120px">
        </div>
    </div>
</div>

<div class="p-5 social-media bg-black" data-aos="fade-up" data-aos-duration="1000">
    <div class="container d-flex flex-column justify-content-center">
        <h1 class="h1 text-white text-xl text-center">GIVE US YOUR FEEDBACK</h1>
        <div class="d-flex align-items-center justify-content-center">
            <div class="w-50 text-center">
                <img src="{{ asset('images/facebook.webp') }}" width="70px">
                <img src="{{ asset('images/yelp.webp') }}" width="70px">
                <img src="{{ asset('images/instagram.webp') }}" width="70px">
            </div>
        </div>
    </div>
</div>
@endsection