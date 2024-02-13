@extends('layouts.app')

@section('main-content')

<div class="hero-container"></div>

<section class="products bg-dark">
    <div class="cta-home">
        <!-- Link per aggiungere un nuovo fumetto -->
        <a href="{{ route('guest.comics.create') }}" class="btn btn-success p-3 m-2 text-white">Aggiungi Nuovo</a>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($comics as $comic)
            <div class="col-md-4">
                <div class="card bg-dark">
                    <!-- Link per visualizzare i dettagli del fumetto -->
                    <a href="{{ route('guest.comics.show', $comic->id) }}" class="text-white">
                        <!-- Immagine del fumetto -->
                        <img class="thumb" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div class="card-body bg-dark p-2">
                            <!-- Titolo del fumetto -->
                            <h5 class="title text-white">{{ $comic->title }}</h5>
                            <!-- Prezzo del fumetto -->
                            <p class="price text-white">{{ $comic->price }}</p>
                            <!-- Serie del fumetto -->
                            <p class="series text-white">{{ $comic->series }}</p>
                        </div>
                    </a>
                    <div class="card-footer bg-dark d-flex justify-content-between">
                        <!-- Bottone per modificare il fumetto -->
                        <a href="{{ route('guest.comics.edit', $comic->id) }}" class="btn btn-warning me-2">Modifica</a>
                        <!-- Bottone per visualizzare i dettagli del fumetto -->
                        <a href="{{ route('guest.comics.show', $comic->id) }}" class="btn btn-primary">Vedi</a>
                    </div>
                </div>
            </div>
            @endforeach
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
