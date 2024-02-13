@extends('layouts.app')

@section('main-content')

<section class="products bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4 text-center text-white p-5">Modifica fumetto</h2>
                <form method="POST" action="{{ route('guest.comics.update', ['comic' => $comic->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{ $comic->title }}" required>
                        <!-- Visualizza eventuali errori sul campo 'title' -->
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione" required>{{ $comic->description }}</textarea>
                        <!-- Visualizza eventuali errori sul campo 'description' -->
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumbnail</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il link del thumbnail" value="{{ $comic->thumb }}" required>
                        <!-- Visualizza eventuali errori sul campo 'thumb' -->
                        @error('thumb')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" value="{{ $comic->price }}" required>
                        <!-- Visualizza eventuali errori sul campo 'price' -->
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" value="{{ $comic->series }}" required>
                        <!-- Visualizza eventuali errori sul campo 'series' -->
                        @error('series')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di vendita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" required>
                        <!-- Visualizza eventuali errori sul campo 'sale_date' -->
                        @error('sale_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo" value="{{ $comic->type }}" required>
                        <!-- Visualizza eventuali errori sul campo 'type' -->
                        @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artisti</label>
                        <input type="text" class="form-control" id="artists" name="artists" placeholder="Inserisci gli artisti" value="{{ $comic->artists }}" required>
                        <!-- Visualizza eventuali errori sul campo 'artists' -->
                        @error('artists')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori</label>
                        <input type="text" class="form-control" id="writers" name="writers" placeholder="Inserisci gli scrittori" value="{{ $comic->writers }}" required>
                        <!-- Visualizza eventuali errori sul campo 'writers' -->
                        @error('writers')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="text-center mb-5">
                        <a href="{{ route('guest.comics.index') }}" class="btn btn-danger me-3">Annulla</a>
                        <button type="submit" class="btn btn-success mx-auto">Salva Modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
