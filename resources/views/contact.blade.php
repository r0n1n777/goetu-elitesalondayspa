@extends('layout')

@section('title', 'Contact Us - Elite Salon Day Spa')

@section('content')

@if (session()->has('success'))
<div class="bg-success text-white p-2 d-flex justify-content-center align-items-center">
    <h3>{{ session()->get('success') }}</h3>
</div>
@endif

@if (session()->has('failed'))
<div class="bg-danger text-white p-2 d-flex justify-content-center align-items-center">
    <h3>{{ session()->get('failed') }}</h3>
</div>
@endif

<div class="p-5 contact-header bg-dark" data-aos="fade-left">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center p-3">
            <h1 class="text-xl text-white">OUR LOCATION</h1>
        </div>
    </div>
</div>

<div class="p-5 contact bg-warning" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=53%20N%20Val%20Vista%20Dr%20Gilbert%20AZ%2085234&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                    <br>
                    <style>
                    .mapouter{position:relative;text-align:right;height:500px;width:600px;}
                    </style>
                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                </div>
            </div>
            <br>
            <h1 class="text-xl d-flex justify-content-between align-items-center">
                <a href="tel:480-926-3333" class="text-xl text-decoration-none">
                    <b>480-926-3333</b>
                </a>
            </h1>
            <br>
            <h3>
                <a href="https://www.google.com/maps/dir//53+N+Val+Vista+Dr,+Gilbert,+AZ+85234,+USA/@33.3513526,-111.7637464,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x872baeb67a7eb103:0x81f2020338d8e930!2m2!1d-111.7549916!2d33.351335" target="_blank" class="text-decoration-none text-nowrap">
                    <x-feathericon-map-pin/>
                    53 N Val Vista Dr #103 Gilbert AZ
                </a>
            </h3>
            <br>
            <h4 class="text-center">
                Mondays-Fridays: 9am-7pm<br>
                Saturdays: 9am-6pm<br>
                Sundays: 10am-5pm
            </h4>
            <br>
            <h3 class="text-center">
                <b>Walk-ins welcomed, appointments preferred.</b>
            </h3>
        </div>
    </div>
</div>

<div class="p-5 contact-header bg-primary" data-aos="fade-left">
    <div class="container text-center">
        <h1 class="text-xl text-white">EMAIL US</h1>
    </div>
</div>

<div class="p-5 bg-warning" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="text-center">
            <h1>Send your inquiries:</h1>
            <h3><b>elitesalondayspacontact@gmail.com</b></h3>
            <br>
            <a href="mailto:elitesalondayspacontact@gmail.com?subject=Inquiry to Elite Salon Day Spa | Gilbert, AZ." class="btn btn-primary btn-lg rounded-pill text-secondary">
                <x-feathericon-mail/> Compose an email for us
            </a>
        </div>
        <div class="row">
            
        </div>
    </div>
</div>

<div class="p-5 contact-header bg-primary" data-aos="fade-left">
    <div class="container text-center">
        <h1 class="text-xl text-white">SEND US A MESSAGE</h1>
    </div>
</div>

<div id="send-message" class="p-5 bg-warning" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <h3 class="text-center mb-5">Do you have questions or concerns? Please send us message, we will respond as quickly as possible.</h3>
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="w-75">
                    <form action="{{ route('send-message') }}" method="post">
                        @csrf
                        <h1 class="text-black font-weight-bold"><b>NAME</b></h1>
                        <input type="text" class="form-control p-2 mb-4 text-capitalize rounded-0" name="name" required value="{{ old('name') }}">
                        @error('name')
                        <b class="text-danger">{{ $message }}</b>
                        @enderror

                        <h1 class="text-black font-weight-bold"><b>EMAIL</b></h1>
                        <input type="text" class="form-control p-2 mb-4 rounded-0" name="email" required value="{{ old('email') }}">
                        @error('email')
                        <b class="text-danger">{{ $message }}</b>
                        @enderror

                        <h1 class="text-black font-weight-bold"><b>PHONE NUMBER</b></h1>
                        <input type="phone" class="form-control p-2 mb-4 rounded-0" name="phone" required value="{{ old('phone') }}">
                        @error('phone')
                        <b class="text-danger">{{ $message }}</b>
                        @enderror

                        <h1 class="text-black font-weight-bold"><b>SUBJECT</b></h1>
                        <input type="text" class="form-control p-2 mb-4 rounded-0" name="subject" required value="{{ old('subject') }}">
                        @error('subject')
                        <b class="text-danger">{{ $message }}</b>
                        @enderror

                        <h1 class="text-black font-weight-bold"><b>MESSAGE</b></h1>
                        <textarea rows="6" class="form-control p-2 mb-4 rounded-0" name="message" required>{{ old('message') }}</textarea>
                        @error('message')
                        <b class="text-danger">{{ $message }}</b>
                        @enderror

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill text-secondary">
                                <x-feathericon-mail/> SEND MESSAGE
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection