<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtenteServiziModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'utene_id',
        'servizio_id',
        'prezzo',
    ];
    protected function setKeysForSaveQuery($query)
    {
        $query
        ->where('utente_id','=',$this->getAttribute('utente_id'))
        ->where('servizio_id','=',$this->getAttribute('servizio_id'));
    }
}
