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
    ];
}
