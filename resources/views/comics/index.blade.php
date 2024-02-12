@extends('layouts.app')

@section('main-content')

<div class="hero-container">

</div>

<section class="products bg-dark">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            
            @foreach ($comics as $comic)
            <div class="col p-1">
                <div class="card bg-dark">
                    <a href="{{ route('guest.comics.show', $comic->id) }}"> <!-- Aggiunto il link qui -->
                        <img class="thumb" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div class="card-body bg-dark p-2 ">
                            <h5 class="title">{{ $comic->title }}</h5>
                            <p class="price">{{ $comic->price }}</p>
                            <p class="series">{{ $comic->series }}</p>
                        </div>
                    </a> 
                </div>
            </div>
        @endforeach
            
        </div>
    </div>

    <div class="cta-home">
        <button class="load-more">
            LOAD MORE
        </button>
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
