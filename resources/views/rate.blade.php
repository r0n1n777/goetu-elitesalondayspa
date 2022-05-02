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
            <a href="https://www.google.com/search?source=hp&ei=RhMMW4_SKc3S8wWM-Ido&q=Elite+Salon+Day+Spa+85234&oq=Elite+Salon+Day+Spa+85234&gs_l=psy-ab.3...4284.14973.0.15841.4.3.0.0.0.0.760.943.2j6-1.3.0....0...1c.1.64.psy-ab..1.0.0.0...0.7X1fE7w_cT0#lrd=0x872baeb670a64445:0x6256af26f84fdc6,3,,," target="_blank">
                <img src="{{ asset('images/rate/star.webp') }}" class="rate-star" id="1" width="120px">
                <img src="{{ asset('images/rate/star.webp') }}" class="rate-star" id="2" width="120px">
                <img src="{{ asset('images/rate/star.webp') }}" class="rate-star" id="3" width="120px">
                <img src="{{ asset('images/rate/star.webp') }}" class="rate-star" id="4" width="120px">
                <img src="{{ asset('images/rate/star.webp') }}" class="rate-star" id="5" width="120px">
            </a>
        </div>
    </div>
</div>

<div class="p-5 social-media bg-black" data-aos="fade-up" data-aos-duration="1000" id="follow-us">
    <div class="container d-flex flex-column justify-content-center">
        <h1 class="h1 text-white text-xl text-center">GIVE US YOUR FEEDBACK</h1>
        <div class="d-flex align-items-center justify-content-center">
            <div class="w-50 text-center">
                <a href="https://www.facebook.com/elitesalondayspa/" target="_blank">
                    <img src="{{ asset('images/facebook.webp') }}" width="70px">
                </a>
                <a href="https://www.instagram.com/elitesalonanddayspa/" target="_blank">
                    <img src="{{ asset('images/instagram.webp') }}" width="70px">
                </a>
                <a href="https://www.yelp.com/biz/elite-salon-day-spa-gilbert" target="_blank">
                    <img src="{{ asset('images/yelp.webp') }}" width="70px">
                </a>
                <a href="https://www.google.com/search?source=hp&ei=RhMMW4_SKc3S8wWM-Ido&q=Elite+Salon+Day+Spa+85234&oq=Elite+Salon+Day+Spa+85234&gs_l=psy-ab.3...4284.14973.0.15841.4.3.0.0.0.0.760.943.2j6-1.3.0....0...1c.1.64.psy-ab..1.0.0.0...0.7X1fE7w_cT0#lrd=0x872baeb670a64445:0x6256af26f84fdc6,1,,," target="_blank">
                    <img src="{{ asset('images/google.webp') }}" width="70px">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection