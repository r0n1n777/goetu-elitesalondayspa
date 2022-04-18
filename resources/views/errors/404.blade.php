@extends('layout')

@section('title', 'Page not Found - Elite Salon Day Spa')

@section('content')
<div class="container-fluid p-5 bg-warning">
    <div class="container text-center">
        <h1 class="mb-4">
            <b>Page not Found.</b><br>
            <span class="h3 text-muted d-flex align-items-center justify-content-center">
                <x-feathericon-alert-triangle/>&nbsp;Error 404
            </span>
        </h1>
        <h3 class="text-danger mb-4">
            <b>
                Sorry, we cannot find the page you were looking for. <br>
                It may have been disabled temporarily or removed.
            </b>
        </h3>
        <a class="btn btn-primary btn-lg" href="{{ route('home') }}">
            <x-feathericon-home/> Go back to Home
        </a>
    </div>
</div>
@endsection