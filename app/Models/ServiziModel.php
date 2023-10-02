<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiziModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_servizio',
        'tipo',
        'prezzo',
        'attivo',
    ];

    //utente può essere parte di piu di uno servizio
    public function utenti()
    {
        return $this->belongsToMany(ServiziModel::class,'utente_servizi','servizio_id','utente_id')->withPivot('attivo');
    }
}
