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
    public function servizi()
    {
        userModel::hasmany('');
    }
}
