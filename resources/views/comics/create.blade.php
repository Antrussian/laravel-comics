@extends('layouts.app')

@section('main-content')

<section class="products bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4 text-center text-white p-5">Aggiungi nuovo fumetto</h2>
                <form method="POST" action="{{ route('guest.comics.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumbnail</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il link del thumbnail" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" required>
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" required>
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di vendita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Seleziona la data di vendita" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo" required>
                    </div>
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artisti</label>
                        <input type="text" class="form-control" id="artists" name="artists" placeholder="Inserisci gli artisti" required>
                    </div>
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori</label>
                        <input type="text" class="form-control" id="writers" name="writers" placeholder="Inserisci gli scrittori" required>
                    </div>
                    <!-- Pulsante Annulla -->
                    <div class="text-center mb-5">
                        <a href="{{ route('guest.comics.index') }}" class="btn btn-danger me-3">Annulla</a>
                        <button type="submit" class="btn btn-success mx-auto">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
