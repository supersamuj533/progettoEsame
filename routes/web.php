<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtenteController;
use App\Http\Controllers\accetto;
use App\Http\Controllers\TwitteController;
use App\Http\Controllers\logOut;
use App\Http\Controllers\divTwitte;
use App\Http\Controllers\profilo;
use App\Http\Controllers\ricercaProfilo;
use App\Http\Controllers\utenteRicercato;
use App\Http\Controllers\AmiciziaController;
use App\Http\Controllers\MiPiaceController;
use App\Http\Controllers\cestino;
use App\Http\Controllers\twitteRic;
use App\Http\Controllers\tendenza;
use App\Http\Controllers\home;
use App\Http\Controllers\ricercaUt;
use App\Http\Controllers\elimina;
use App\Http\Controllers\logOutControll;
use App\Http\Controllers\bio;
use App\Http\Controllers\test;
use App\Http\Controllers\accesso;
use App\Http\Controllers\fotoProfilo;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are lophp artisan make:controller <controller-name> --plainphp artisan make:controller <controller-name> --plainaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




$test=test::class;
$accetto=accetto::class;
$UtenteController=UtenteController::class;
$TwitteController=TwitteController::class;
$logOut=logOut::class;
$divTwitte=divTwitte::class;
$profilo=profilo::class;
$ricercaProfilo=ricercaProfilo::class;
$utenteRicercato=utenteRicercato::class;
$AmiciziaController=AmiciziaController::class;
$cestino=cestino::class;
$MiPiaceController=MiPiaceController::class;
$twitteRic=twitteRic::class;
$tendenza=tendenza::class;
$home=home::class;
$ricercaUt=ricercaUt::class;
$elimina=elimina::class;
$logOutControll=logOutControll::class;
$bio=bio::class;
$accesso=accesso::class;
$home=home::class;
$fotoProfilo=fotoProfilo::class;

//user

Route::get('/test', [$test,'t']);
Route::get('/index', [$logOutControll,'logControll']);
Route::get('/iscrizione', function () {return view('iscrizione');});
Route::get('/accesso', [$accesso,'acs']);
Route::get('/accesso2', [$accesso,'acs2']);
Route::get('/accetta', function () {return view('accetta');});
Route::get('/regDim', function () {return view('regDim');});
Route::get('/log22', [$UtenteController,'acs']);
Route::get('/reg22', [$UtenteController,'registrazione']);
Route::get('/accettaCont', [$accetto,'a']);
Route::get('/cerca2', [$ricercaUt,'ricerca']);



Route::get('/home',  [$home,'home']);
Route::get('/foto2',  [$fotoProfilo,'delete']);
Route::get('/twitte', [$TwitteController,'crea']);
Route::get('/logout', [$logOut,'out']);
Route::get('/divtwitte', [$divTwitte,'recupero']);
Route::get('/profilo', [$profilo,'utente']);
Route::get('/profilo2', [$profilo,'twitte']);
Route::get('/ricercaProfilo', [$ricercaProfilo,'ricerca']);
Route::get('/utenteRicercato', [$utenteRicercato,'utente']);
Route::get('/utenteRicercato2', [$utenteRicercato,'twitte']);
Route::get('/follow', [$AmiciziaController,'crea']);
Route::get('/followDelete', [$AmiciziaController,'delete']);
Route::get('/cuore', [$MiPiaceController,'crea']);
Route::get('/cuore3', [$MiPiaceController,'crea3']);
Route::get('/cuore2', [$MiPiaceController,'crea2']);
Route::get('/cuore4', [$MiPiaceController,'delete1']);
Route::get('/cuore5', [$MiPiaceController,'delete2']);
Route::get('/cuore6', [$MiPiaceController,'delete3']);
Route::get('/cestino2', [$cestino,'crea2']);
Route::get('/twitteRicerca', [$tendenza,'esplora']);
Route::get('/cerca', [$twitteRic,'cerca']);
Route::get('/cestino', [$elimina,'elimina']);
Route::get('/modificaBio', [$bio,'modifica']);
Route::get('/modificaBio2', [$bio,'modifica2']);








