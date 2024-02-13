@extends('layouts.app')

@section('main-content')

<section class="products bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-6">
                <div class="card bg-dark text-white w-100">
                    <div class="card-body w-100">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->description }}</p>
                        <p class="card-text">Price: {{ $comic->price }}</p>
                        <p class="card-text">Series: {{ $comic->series }}</p>
                        <p class="card-text">Sale Date: {{ $comic->sale_date }}</p>
                        <p class="card-text">Type: {{ $comic->type }}</p>
                        <p class="card-text">Artists: {{ $comic->artists }}</p>
                        <p class="card-text">Writers: {{ $comic->writers }}</p>
                    </div>
                </div>

                <div class="cta-home d-flex justify-content-start mt-3">
                    <a href="{{ route('guest.comics.index') }}" class="btn btn-secondary me-3">Vedi tutti</a>
                    <button class="btn btn-primary">Acquista Ora</button>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="info">
    <ul class="icon-ul">
        <li><span><img class="icon" src="{{ asset('resources/img/buy-comics-digital-comics.png') }}" alt="logo" class="img-fluid "></span> DIGITAL COMICS</li>
        <li><span><img class="icon" src="{{ asset('resources/img/buy-comics-merchandise.png') }}" alt="logo" class="img-fluid "></span> MERCHANDISE</li>
        <li><span><img class="icon" src="{{ asset('resources/img/buy-comics-shop-locator.png') }}" alt="logo" class="img-fluid "></span> SHOP LOCATOR</li>
        <li><span><img class="icon" src="{{ asset('resources/img/buy-comics-subscriptions.png') }}" alt="logo" class="img-fluid "></span> SUBSCRIPTIONS</li>
        <li><span><img class="icon" src="{{ asset('resources/img/buy-dc-power-visa.svg') }}" alt="logo" class="img-fluid "></span> DC POWER VISA</li>
    </ul>
</div>

@endsection
