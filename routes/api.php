<?php

use App\Http\Controllers\serviziController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//route per utente
Route::controller(userController::class)
->name('utente')
->prefix('/utente')
->group(function()
{
Route::post('','creaUtente')->name('crea_utente');
Route::get('','dettaglioUtente')->name('detaggli_utente');
Route::delete('/{utente}','deleteUtente')->name('elimina_utente');
});

//route per servizi
Route::controller(serviziController::class)
->name('servizi')
->prefix('/servizi')
->group(function()
{
Route::post('','creaServizio')->name('crea_Servizio');
Route::get('','dettaglioServizio')->name('detaggli_Servizio');
Route::delete('/{servizio}','deleteServizio')->name('elimina_servizio');
});

