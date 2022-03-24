@extends('layout')

@section('title', 'Contact Us - Elite Salon Day Spa')

@section('content')
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
            <h1 class="text-xl">
                <x-feathericon-phone/> 
                <b>480-926-3333</b>
            </h1>
            <br>
            <h3>
                <x-feathericon-map-pin/>
                53 N Val Vista Dr #103 Gilbert AZ
            </h3>
            <br>
            <h4 class="text-center">
                Mondays-Fridays: 9am-7pm<br>
                Saturdays: 9am-6pm<br>
                Sundays: 10am-5pm
            </h4>
        </div>
    </div>
</div>

<div class="p-5 bg-primary" data-aos="fade-left">
    <div class="container text-center">
        <h1 class="text-xl text-white">CONTACT US</h1>
        <h3 class="text-white">This feature is currently under maintenance. You may contact us through our phone number for the time being.</h3>
    </div>
</div>

<div class="p-5 bg-warning" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="w-75">
                    <h1 class="text-black font-weight-bold"><b>NAME</b></h1>
                    <input type="text" class="form-control p-2 mb-4 text-capitalize rounded-0">
                    <h1 class="text-black font-weight-bold"><b>EMAIL</b></h1>
                    <input type="text" class="form-control p-2 mb-4 rounded-0">
                    <h1 class="text-black font-weight-bold"><b>PHONE NUMBER</b></h1>
                    <input type="phone" class="form-control p-2 mb-4 rounded-0">
                    <h1 class="text-black font-weight-bold"><b>SUBJECT</b></h1>
                    <input type="text" class="form-control p-2 mb-4 rounded-0">
                    <h1 class="text-black font-weight-bold"><b>MESSAGE</b></h1>
                    <textarea rows="6" class="form-control p-2 mb-4 rounded-0"></textarea>
                    <div class="text-center">
                        <a href="!#" class="btn btn-primary btn-lg rounded-pill text-secondary">
                            <x-feathericon-mail/> SEND MESSAGE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection