<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Administrator Dashboard - Elite Salon Day & Spa</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles
    </head>
    <body class="antialiased bg-warning">
        <div class="d-flex justify-content-center align-items-center bg-primary pt-2">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo-expand.webp') }}" width="300px" data-aos="fade-up">
            </a>
            <h1 class="text-white">Admin Dashboard</h1>
        </div>
        <nav class="navbar navbar-expand-xl navbar-light bg-primary sticky-top">
            <div class="container-fluid d-flex justify-content-center">
                <div class="navbar-expand">
                    <ul class="navbar-nav">
                        <li class="nav-item px-2">
                            <a class="h5 nav-link text-white" href="{{ route('admin-dashboard') }}">Services</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h5 nav-link text-white" href="{{ route('admin-gallery') }}">Gallery</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h5 nav-link text-white" href="">Promotions</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="h5 nav-link text-white" href="">Ratings</a>
                        </li>
                        <li class="nav-item px-2">
                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-danger">
                                    <x-feathericon-log-out/> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            {{ $slot }}
        </div>

        <a class="back-to-top p-2 bg-primary text-white border border-secondary rounded d-none text-decoration-none" href="#">
            <x-feathericon-chevron-up/> Back to top
        </a>
        
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="https://cdn.tiny.cloud/1/y1862i4ly9lywtcjhdsn2z04qasso9agsjaqjm2dxmoje6bv/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        @livewireScripts
    </body>
</html>
