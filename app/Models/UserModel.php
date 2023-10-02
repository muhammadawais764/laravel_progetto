<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cognome',
        'email',
        'telefono'

        
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //servizio può essere parte di piu di un utente
    public function servizi()
    {
        return $this->belongsToMany(UserModel::class,'utente_servizi','utente_id','servizio_id')->withPivot('attivo');
    }
}
