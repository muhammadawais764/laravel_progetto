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
}
