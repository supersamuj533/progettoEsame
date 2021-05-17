<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class profilo extends Controller
{
    public function utente()
    { 
        $bio=1;
        $utente = DB::select('SELECT * FROM utente where stato=1');
       
        return view('mioProfilo',['utente'=> $utente],['bio'=>$bio] );
      
    }

    public function twitte()
    { 
        $utente = DB::select('SELECT * FROM utente where stato=1');
        foreach($utente as $utentes){$idUtente=$utentes->id;} 
      
        $twitte = DB::select("SELECT t.id,t.titolo,t.imm,t.text,t.data,t.utente as'utente1' ,  p.utente as'utente2',  p.id as'id2',count(p.id) as 'contaCuori'
          FROM twitte t  LEFT OUTER JOIN miPiace p on t.id=p.twitte where t.utente=$idUtente  and t.tipo<>3  group by( t.id )   order by t.data desc   ");
    

        return view('mioProfilo2',['twitte'=> $twitte] );
      
    }
}
