<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\twitte;

class ricercaUt extends Controller
{ 

    public function r(Request $request)
    {
        $message='';
        return view('regDim',['message'=> $message]);
    }


    public function ricerca(Request $request)
    {  try{
        $dati = $request->input();
        if(empty($dati['ricerca'])){
            $message='x        Hai inserito dei dati inesistenti';
            return view('regDim',['message'=> $message]);
        }
        else{
        $parolaChiave=$dati['ricerca'];}
     $email = DB::table('utente')->where('email','LIKE', $parolaChiave )
                      ->get();
    $numero = DB::table('utente')->where('numero','=', $parolaChiave )
                  ->get();
    $nomeUtente = DB::table('utente')->where('nomeUtente','LIKE', $parolaChiave )
                      ->get();
                      foreach( $email as  $emails){
   if($emails->email==$parolaChiave){$utente=$email;}

}
   foreach($nomeUtente as  $nomeUtentes){
   if($nomeUtentes->nomeUtente==$parolaChiave){$utente=$nomeUtente;}


}
   foreach($numero  as  $numeros){
    if($numeros->numero==$parolaChiave){$utente=$numero;}
 

}
    $message='';
    if(empty($utente)){
        $message='X        Hai inserito dei dati inesistenti';
        return view('regDim',['message'=> $message]);
    }
    else{
        return view('regDim2',['utente'=> $utente,'message'=> $message]);}
   }
   catch (Exception $e){ return redirect('/cerca2');} 
    
}


     
    }
