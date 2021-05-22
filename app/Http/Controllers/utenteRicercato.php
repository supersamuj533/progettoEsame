<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\utente;
use App\Models\amicizia;

class utenteRicercato extends Controller
{  
    public function utente(Request $request)
    {   $utenteVecchio= DB::select('SELECT u.id FROM utente u where u.stato=3');
        $data = $request->input();
        $nomeUtente= $data['nomeUtente2'];
        $Utente1= DB::select('SELECT * FROM utente u where u.stato=1');
        foreach($Utente1 as $Utente1s){
            if($Utente1s->nomeUtente==$nomeUtente){
                
        utente::where('stato', '=', 3)->update(['stato' => 0]);
                $utente = DB::table('utente')->where('nomeUtente','LIKE','%'.$nomeUtente.'%')->get();
                foreach($utente as $utentes){$id=$utentes->id;}
                $utenteA = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteAccetta=$id ");
                $utenteR = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteRichiede=$id ");
                $boolean='MYself';
                return view('Profilo',['utente'=> $utente] ,['boolean'=>$boolean, 'utenteA'=>$utenteA, 'utenteR'=>$utenteR]); 
            }
        }
        utente::where('stato', '=', 3)->update(['stato' => 0]);
        utente::where('nomeUtente', 'LIKE', '%'.$nomeUtente.'%')->update(['stato' => 3]);
        $utente = DB::table('utente')->where('nomeUtente','LIKE','%'.$nomeUtente.'%')->get();
        foreach($utente as $utentes){$id=$utentes->id;}
        $utenteA = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteAccetta=$id ");
        $utenteR = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteRichiede=$id ");
        $Utente3= DB::select('SELECT * FROM utente u where u.stato=3');
        $boolean='false';
        foreach (amicizia::all() as $amicizias) {
            $a=$amicizias->utenteAccetta;
            $r=$amicizias->utenteRichiede;
            foreach( $Utente1 as  $Utente1s){
                foreach($Utente3 as  $Utente3s){
                    if($Utente3s->id==$a)
                    {
                     if($Utente1s->id==$r) 
                     {
                        $boolean='true';
                      
                     }
            }}}}
        
        return view('Profilo',['utente'=> $utente] ,['boolean'=>$boolean,'utenteA'=>$utenteA, 'utenteR'=>$utenteR]);
      
    }

    public function twitte()
    { 
     
        $utente = DB::table('utente')->where('stato','=',3)->get();
        if(count($utente)==0){//solo e solamente se nella funzione sopra l' utente loggato e l' utenteche viene ricercato è lo stesso
            $utente = DB::table('utente')->where('stato','=',1)->get();
            foreach($utente as $utentes){$idUtente=$utentes->id;}   
            $twitte = DB::select("SELECT  t.id,t.titolo,t.imm,t.text,t.data,  p.utente ,  p.id as'id2'
            FROM twitte t LEFT OUTER JOIN miPiace p on t.id=p.twitte where t.utente=$idUtente   and t.tipo<>3 group by( t.id )  
            order by t.data desc  ");
         $utente1 = DB::table('utente')->where('stato','=',1)->get();
           return view('mioProfilo3',['twitte'=> $twitte],['utente1'=>$utente1] );
        }
        foreach($utente as $utentes){$idUtente=$utentes->id;} 
      
        $twitte = DB::select("SELECT  t.id,t.titolo,t.imm,t.text,t.data,  p.utente ,  p.id as'id2'
         FROM twitte t LEFT OUTER JOIN miPiace p on t.id=p.twitte where t.utente=$idUtente   and t.tipo<>3 group by( t.id )  
         order by t.data desc  ");
      $utente1 = DB::table('utente')->where('stato','=',1)->get();
        return view('mioProfilo3',['twitte'=> $twitte],['utente1'=>$utente1] );
      
    }
}
