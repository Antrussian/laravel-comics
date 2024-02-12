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

Route::get('/comics/create', [GuestFumettiController::class, 'create'])->name('guest.comics.create');

Route::post('/comics', [GuestFumettiController::class, 'store'])->name('guest.comics.store');

Route::get('/comics', [GuestFumettiController::class, 'index'])->name('guest.comics.index');

Route::get('comics/{comic}', [GuestFumettiController::class, 'show'])->name('guest.comics.show');

Route::get('/', function () {
    $items = config('db.item');
    return view('pages.home', ['products' => $items]);
});


