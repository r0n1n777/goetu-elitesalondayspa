@extends('layout')

@section('title', 'Promos - Elite Salon Day Spa')

@section('content')
@if(count($promos) == 0)
<div class="p-5 bg-secondary">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h1>
            <x-feathericon-alert-circle/><b> Promotions on the works!</b>
        </h1>
        <h3 class="text-center">There are no current active promos at the moment. <br>Always keep in touch and don't miss out in our upcoming promotions!</h3>
        <br>
        <h5><b>Feel free to visit our salon to get news regarding our promos in the future.</b></h5>
    </div>
</div>
@endif
<div id="home-carousel" class="carousel slide bg-secondary" data-bs-ride="carousel" data-aos="fade-left">
    <div class="carousel-inner">
        @foreach($promos as $promo)
        <div class="carousel-item @if($loop->first) active @endif">
            <img src="{{ asset('images/promotions/'.$promo->photo) }}" class="opacity-75 d-block w-100">
            <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100 carousel-content">
                <h1 class="text-black bg-white p-3 rounded-pill">{{ $promo->title }}</h1>
                <div class="p-1 w-25 bg-secondary mt-3 mb-5"></div>
                <div class="bg-secondary p-3 rounded shadow">
                {!! $promo->description !!}
                </div>
            </div>
        </div>
        @endforeach
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

    
@endsection