<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class utenteServiziController extends Controller
{
    public function servizi_e_prezzi()
    {
        //qui su base di informazione che noi abbiamo serve come prezzi e servizi che un utente 
        //utilizato e somma  di prezzi su base di un utente e anche su base di data scrivamo un query 
        //tra due date per prende totale prezzi servizi e totale costa 
        // per creare un invioce su base di informazione che serve un utente
        // facciamo un esampio finita
        $subquery = "(
            SELECT utente_id count(prezzo) t_somma_un_utente
            FROM [utente_servizi]
            GROUP BY utente_id
        ) ser";
        $query = DB::table('servizi')
            ->select(
                DB::raw(
                    'count(*) as totale ,
                sum(t_somma_un_utente) n_totale'
                )
            )->leftjoin(DB::raw($subquery), 'ser.utente_id', '=', 'utenti.id')
            ->get();
        return new JsonResponse([
            "data" => $query
        ], 200);
    }
}
