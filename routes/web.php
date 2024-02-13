<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\FumettiController as GuestFumettiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Qui puoi registrare le route web per la tua applicazione. Queste
| route sono caricate dal RouteServiceProvider e tutte saranno
| assegnate al gruppo di middleware "web". Fai qualcosa di grandioso!
|
*/

// Route per visualizzare il form per aggiungere un nuovo fumetto
Route::get('/comics/create', [GuestFumettiController::class, 'create'])->name('guest.comics.create');

// Route per salvare un nuovo fumetto nel database
Route::post('/comics', [GuestFumettiController::class, 'store'])->name('guest.comics.store');

// Route per visualizzare tutti i fumetti
Route::get('/comics', [GuestFumettiController::class, 'index'])->name('guest.comics.index');

// Route per visualizzare i dettagli di un fumetto
Route::get('comics/{comic}', [GuestFumettiController::class, 'show'])->name('guest.comics.show');

// Route per visualizzare il form per modificare un fumetto
Route::get('/comics/{comic}/edit', [GuestFumettiController::class, 'edit'])->name('guest.comics.edit');

// Route per salvare le modifiche di un fumetto nel database
Route::put('/comics/{comic}', [GuestFumettiController::class, 'update'])->name('guest.comics.update');
