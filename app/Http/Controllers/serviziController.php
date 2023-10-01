<?php

namespace App\Http\Controllers;

use App\Models\ServiziModel;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\ServiziResource;
use App\Http\Requests\creaServiziRequest;
use App\Http\Requests\modificaServiziRequest;

class serviziController extends Controller
{
    public function creaServizio(creaServiziRequest $request)
    {
        //creazione di utente su base di utente
        //e torna su base di infomazione che serve per mostare su piataforma
        $servizio = ServiziModel::create([]);
        return new ServiziResource($servizio);
    }

    public function modificaServizio(modificaServiziRequest $request)
    {
        //modificazione di utente
        //e torna su base di infomazione che serve per mostare su piataforma doppo modificazione
        $servizio = ServiziModel::updateorCreate([]);
        return new ServiziResource($servizio);
    }

    public function deleteServizio(Request $request)
    {
        //eliminazione di utente
        ServiziModel::delete($request->id);
        return new JsonResponse([
            'utente e stato eliminato'
        ]);
    }

    public function dettaglioUtente(Request $request)
    {
        //eliminazione di utente
        $servizio = ServiziModel::where('id',$request->id);
        return new ServiziResource($servizio);
    }
}
