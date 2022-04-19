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

<div class="p-5 bg-warning" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row g-2">
            @foreach ($photos as $photo)
            <div class="col-lg-2 col-md-3 col-sm-4">    
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <a data-fslightbox href="{{ asset('images/gallery/store/'.$photo) }}">
                        <img src="{{ asset('images/gallery/store/'.$photo) }}" class="img-thumbnail thumbnail">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection