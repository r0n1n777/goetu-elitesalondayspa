@extends('layout')

@section('title', 'Gallery - Elite Salon Day Spa')

@section('content')
<div class="p-5 gallery-header bg-dark" data-aos="fade-left">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center p-3">
            <h1 class="text-white">ELITE SALON DAY SPA</h1>
            <span class="text-xl text-white text-center">OUR SALON</span>
        </div>
    </div>
</div>

{{-- <iframe width="320" height="440" src="https://www.instagram.com/elitesalonanddayspa/embed" frameborder="0"></iframe> --}}

<div class="p-5 bg-warning" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="text-center">            
            @for ($x = 1; $x <= 10; $x++)
                <a data-fslightbox="gallery" href="{{ asset('images/gallery/store/'.$x.'.webp') }}">
                    <img src="{{ asset('images/gallery/store/'.$x.'.webp') }}" class="img-thumbnail thumbnail m-2">
                </a>
            @endfor
        </div>
    </div>
</div>
@endsection