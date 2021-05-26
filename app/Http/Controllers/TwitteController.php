<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\twitte;
use App\Models\utente;

class TwitteController extends Controller
{
    public function crea(Request $request)
    {
        try{
        $dati = $request->input();
        
        $utente = utente::where('stato', 1)->first();
        
        $idUtente=$utente->id;
        $twitte = new twitte;
         if("pubblico"==$dati['tipo']){ $twitte->tipo=0;}
         else{$twitte->tipo=1;}
         if(strlen ( $dati['text'] )>20){
            $message='Inserisci un twitte non superiore ai 254 caratteri';
            return redirect('home2')->with($message);
         }
         else{
        $twitte->text= $dati['text'];}
        $twitte->titolo = $dati['titolo'];
        if(empty($dati['imm'])){
            $imm="2.jpg";}
        else{$imm=$dati['imm'];}
        $twitte->imm = $imm;
        $twitte->utente=$idUtente ;

        $twitte->save();
        $message='';
        return redirect('home')->with($message);
    }
    catch(Exception $e){
        $message='';
        return redirect('home')->with($message);
    }
    }
}
