@extends('layout')

@section('title', 'Services - Elite Salon Day Spa')

@section('content')
<div class="p-5 services-header bg-dark" data-aos="fade-left">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center p-3">
            <h1 class="text-xl text-white">OUR SERVICES</h1>
        </div>
    </div>
</div>

<div class="p-5 bg-primary sticky-top sticky-offset">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
            <div class="col text-center" data-aos="fade-up">
                <a href="#{{ $service->id }}" class="text-decoration-none text-white h5">{{ $service->name }}</a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="p-5 services bg-warning">
    <div class="container">
        @foreach($services as $service)
        <div id="{{ $service->id }}" class="card mb-3" data-aos="fade-left" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('images/services/'.$service->photo) }}" class="img-fluid rounded-start h-100">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h1 class="card-title text-xl">{{ $service->name }}</h1>
                        @foreach($service->categories as $category)
                        @if ($category->name != 'No Category')
                        <h3 class="bg-secondary p-2 rounded-pill mt-4">{{ $category->name }}</h3>
                        @endif
                            @foreach($category->menus as $menu)
                            <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                                <b>{{ $menu->name }}</b>
                                @foreach($menu->prices as $price)
                                <b>${{ $price->amount }}</b>
                                @endforeach
                            </p>
                            @endforeach
                        @endforeach
                        <p class="card-text d-flex justify-content-between align-items-end">
                            {!! $service->note !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection