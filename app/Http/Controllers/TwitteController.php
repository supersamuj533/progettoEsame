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
        $twitte->text= $dati['text'];
        $twitte->titolo = $dati['titolo'];
        $twitte->imm = $dati['imm'];
        $twitte->utente=$idUtente ;
        $twitte->save();
        return redirect('home')->with("Insert successfully");
    }
    catch(Exception $e){
        return redirect('home')->with("operation failed");
    }
    }
}
