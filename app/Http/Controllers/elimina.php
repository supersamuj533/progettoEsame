<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class elimina extends Controller
{ 
    public function elimina(Request $request)
    {  try{
        $twitte2 = DB::select(
            "SELECT count(p.id) as 'mip',t.titolo , t.text , t.data
        FROM mipiace p join twitte t on t.id=p.twitte 
        group by (p.twitte) 
        order by(mip) desc ");
    
    
      $utente2 = DB::select(
            "SELECT count(a.id) as 'ami',u.nomeUtente 
        FROM amicizia a join utente u on a.utenteAccetta=u.id 
        group by (a.utenteAccetta)
         order by(ami) desc ");
    
     
        $utente = DB::select("SELECT * FROM utente u  where u.stato=1");
        return view('cestino',[ 'utente'=> $utente, 'twitte2'=> $twitte2 , 'utente2'=> $utente2] );
      }
      catch (Exception $e){ return redirect('/cestino');}
    }
    public function elimina2(Request $request)
    {  
        try{
        $twitte2 = DB::select(
            "SELECT count(p.id) as 'mip',t.titolo , t.text , t.data
        FROM mipiace p join twitte t on t.id=p.twitte 
        group by (p.twitte) 
        order by(mip) desc ");
    
    
      $utente2 = DB::select(
            "SELECT count(a.id) as 'ami',u.nomeUtente 
        FROM amicizia a join utente u on a.utenteAccetta=u.id 
        group by (a.utenteAccetta)
         order by(ami) desc ");
     $twitte = DB::select('SELECT t.id,t.imm,t.text,t.data,t.titolo,t.utente, t.tipo FROM twitte t join utente u on t.utente=u.id 
     where t.tipo=3  and u.stato=1');
     
        $utente = DB::select("SELECT * FROM utente u  where u.stato=1");
        return view('cestino2',['twitte'=> $twitte ,  'utente'=> $utente, 'twitte2'=> $twitte2 , 'utente2'=> $utente2] );
      }
      catch (Exception $e){ return redirect('/cestino2');}
    }


     
}
