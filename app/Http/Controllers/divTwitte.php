<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\miPiace;

class divTwitte extends Controller
{
    public function recupero()
    { //count(p.id)as "num" ,p.utente as "ut" ,
        //LEFT OUTER JOIN miPiace p on t.id=p.twitte 
        $twitte1 = DB::select('SELECT  t.id,  t.text,t.imm, t.data,t.titolo,t.utente,u.nomeUtente, p.utente  as "ut",p.id as"id2",count(p.id) as "contaCuori"
         FROM twitte t join utente u on t.utente=u.id join amicizia a on a.utenteAccetta=u.id join utente u2
        on u2.id=a.utenteRichiede  LEFT OUTER JOIN miPiace p on t.id=p.twitte   where t.tipo=1 and u2.stato=1 group by (t.id) order by (t.data)desc  ');
     $twitte3 = DB::select('SELECT t.id, t.text,t.imm, t.data,t.titolo,t.utente,u.nomeUtente, p.utente  as "ut" ,p.id as"id2", count(p.id) as "contaCuori"
      FROM twitte t join utente u on t.utente=u.id 
     LEFT OUTER JOIN miPiace p on t.id=p.twitte   where t.tipo <>3  and u.stato=1 or t.tipo=0 group by (t.id)  order by (t.data)desc');
   
    // $twitte4=array_merge($twitte1,$twitte2);
     $twitte=array_merge($twitte1,$twitte3); 

     
     $utente = DB::select('SELECT * from utente where stato=1');
     foreach($utente as $utentes){$idUtente=$utentes->id;} 
     $mipiace=DB::select("SELECT * from mipiace p where p.utente=$idUtente ");
     $mipiaceTot=DB::select("SELECT count(p.id) as 'ContaCuore', p.twitte from mipiace p group by(p.twitte) ");
        
        return view('Twitte',['twitte'=> $twitte ,'utente'=>$utente, 'mipiace'=> $mipiace,'mipiaceTot'=> $mipiaceTot]);
      
    }
}
