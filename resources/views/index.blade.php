
@extends("layouts.app")

@section("content")
<div class="jumbotron">
    <div class="container text-center">
        <h1>Welcome to {{ config('app.name') }}</h1>
        <p>This is {{ $title }}</p>
    </div>
    <div class="text-center">
        <a class="btn btn-primary"><font color="#ffffff">Signin</font></a>
        <a class="btn btn-success"><font color="#ffffff">Signup</font></a>
    </div>
</div>
<div id="carouselGallery" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('storage/img/img1.png') }}" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('storage/img/img2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('storage/img/img3.jpg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselGallery" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselGallery" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
@endsection