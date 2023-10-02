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

    /**
     * creazione per un utente 
     * @param creaUtenteRequest 
     * @return utenteResource
     */
    public function creaUtente(creaUtenteRequest $request)
    {
        //creazione di utente su base di utente
        //e torna su base di infomazione che serve per mostare su piataforma
        $utente = UserModel::create([]);
        return new utenteResource($utente);
    }

    /**
     * modificazione un utente 
     * @param modificaUtenteRequest 
     * @return utenteResource
     */
    public function modificaUtente(modificaUtenteRequest $request)
    {
        //modificazione di utente
        //e torna su base di infomazione che serve per mostare su piataforma doppo modificazione
        $utente = UserModel::updateorCreate([]);
        return new utenteResource($utente);
    }

    /**
     * eliminazione un utente 
     * @param UserModel 
     * @return JsonResponse
     */
    public function deleteUtente(UserModel $utente)
    {
        //eliminazione di utente

        return new JsonResponse([
            'utente e stato eliminato'
        ]);
    }

    /**
     * dettaglio per un utente 
     * @param Request 
     * @return utenteResource
     */
    public function dettaglioUtente(Request $request)
    {
        //eliminazione di utente
        $utente = UserModel::where('id', $request->id);
        return new utenteResource($utente);
    }
}
