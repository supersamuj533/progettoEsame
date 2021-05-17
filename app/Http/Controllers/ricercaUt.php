<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\twitte;

class ricercaUt extends Controller
{ 
    public function ricerca(Request $request)
    {  
        $dati = $request->input();
        $parolaChiave=$dati['ricerca'];
     $email = DB::table('utente')->where('email','LIKE', $parolaChiave )
                      ->get();
    $numero = DB::table('utente')->where('numero','=', $parolaChiave )
                  ->get();
    $nomeUtente = DB::table('utente')->where('nomeUtente','LIKE', $parolaChiave )
                      ->get();
                      foreach( $email as  $emails){
   if($emails->email==$parolaChiave){$utente=$email;}}
   foreach($nomeUtente as  $nomeUtentes){
   if($nomeUtentes->nomeUtente==$parolaChiave){$utente=$nomeUtente;}}
   foreach($numero  as  $numeros){
    if($numeros->numero==$parolaChiave){$utente=$numero;}}
        return view('regDim2',['utente'=> $utente]);
     
}


     
    }

