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
    /**
     * crea un servizio 
     * @param CreaServiziRequest 
     * @return ServiziResource
     */
    public function creaServizio(creaServiziRequest $nuovo_servizio)
    {
        //creazione di utente su base di utente
        //e torna su base di infomazione che serve per mostare su piataforma
        $servizio = ServiziModel::create([$nuovo_servizio]);
        return new ServiziResource($servizio);
    }

    /**
     * modifica un servizio 
     * @param modificaServiziRequest 
     * @return ServiziResource
     */
    public function modificaServizio(modificaServiziRequest $request)
    {
        //modificazione di utente
        //e torna su base di infomazione che serve per mostare su piataforma doppo modificazione
        $servizio = ServiziModel::updateorCreate([]);
        return new ServiziResource($servizio);
    }

    /**
     * elimina un servizio 
     * @param ServiziModel 
     * @return JsonResponse
     */
    public function deleteServizio(ServiziModel $servizio)
    {
        //eliminazione di utente
        $servizio->delete();
        return new JsonResponse([
            'utente e stato eliminato'
        ]);
    }

    /**
     * dettaglio per un servizio 
     * @param Request 
     * @return ServiziResource
     */
    public function dettaglioServizio(Request $request)
    {
        //eliminazione di utente
        $servizio = ServiziModel::where('id', $request->id);
        return new ServiziResource($servizio);
    }
}
