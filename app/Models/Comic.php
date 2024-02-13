<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // Utilizza il trait HasFactory per utilizzare i factory
    use HasFactory;

    // Attributi che possono essere compilati in modo massivo
    protected $fillable = [
        'title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'artists', 'writers'
    ];

    // Attributi predefiniti per il modello
    protected $attributes = [
        'thumb' => '', // Imposta un valore predefinito per il campo 'thumb'
    ];

    // Regole di validazione per la creazione/modifica di un fumetto
    public static $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'thumb' => 'required|url',
        'price' => 'required|numeric|min:0',
        'series' => 'required|string|max:255',
        'sale_date' => 'required|date',
        'type' => 'required|string|max:255',
    ];
}
