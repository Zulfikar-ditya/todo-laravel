@extends('welcome')

@section('title')

@endsection

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/572897/pexels-photo-572897.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="..." height="700px">
            <div class="carousel-caption d-none d-md-block">
                <h2>Foto oleh eberhard grossgasteiger dari Pexels</h2>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/572897/pexels-photo-572897.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="..." height="700px">
            <div class="carousel-caption d-none d-md-block">
                <h2>Foto oleh eberhard grossgasteiger dari Pexels</h2>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/572897/pexels-photo-572897.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="..." height="700px">
            <div class="carousel-caption d-none d-md-block">
                <h2>Foto oleh eberhard grossgasteiger dari Pexels</h2>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="jumbotron text-capitalize">
    <div class="container">
        <h1 class="display-3">Hello</h1>
        <p class="lead">This a place for storing you To Do</p>
        <hr class="my-4">
        <div class="d-flex">
            <a class="btn btn-outline-primary mr-4" href="#" role="button">Login</a>
            <a class="btn btn-outline-success" href="#" role="button">Register</a>
        </div>
    </div>
</div>
@endsection
