<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\utenteResource;
use App\Http\Requests\creaUtenteRequest;
use App\Http\Requests\modificaUtenteRequest;
use App\Models\UserModel;
use Illuminate\Http\JsonResponse;

class userController extends Controller
{
    public function creaUtente(creaUtenteRequest $request)
    {
        //creazione di utente su base di utente
        //e torna su base di infomazione che serve per mostare su piataforma
        $utente = UserModel::create([]);
        return new utenteResource($utente);
    }

    public function modificaUtente(modificaUtenteRequest $request)
    {
        //modificazione di utente
        //e torna su base di infomazione che serve per mostare su piataforma doppo modificazione
        $utente = UserModel::updateorCreate([]);
        return new utenteResource($utente);
    }

    public function deleteUtente(Request $request)
    {
        //eliminazione di utente
        
        return new JsonResponse([
            'utente e stato eliminato'
        ]);
    }

    public function dettaglioUtente(Request $request)
    {
        //eliminazione di utente
        $utente = UserModel::where('id',$request->id);
        return new utenteResource($utente);
    }

}
