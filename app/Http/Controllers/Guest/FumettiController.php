<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class FumettiController extends Controller
{
    public function index()
    {
        $comics = Comic::all(); 
        return view('comics.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        // Creazione di un nuovo fumetto con i dati ricevuti dal formulario
        $comic = new Comic();
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb; 
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = json_encode($request->artists);
        $comic->writers = json_encode($request->writers);
        $comic->save();

        // Reindirizzamento alla pagina index dopo aver aggiunto il fumetto
        return redirect()->route('guest.comics.index')->with('success', 'Fumetto aggiunto con successo!');
    }

    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    public function edit(string $id)
    {
        // Implementa la logica per modificare un fumetto
    }

    public function update(Request $request, string $id)
    {
        // Implementa la logica per aggiornare un fumetto
    }

    public function destroy(string $id)
    {
        // Implementa la logica per eliminare un fumetto
    }
}
