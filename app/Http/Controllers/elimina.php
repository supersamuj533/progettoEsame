<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class elimina extends Controller
{ 
    public function elimina(Request $request)
    {  
     $twitte = DB::select('SELECT t.id,t.imm,t.text,t.data,t.titolo,t.utente, t.tipo FROM twitte t join utente u on t.utente=u.id 
     where t.tipo=3  and u.stato=1');
     
        $utente = DB::select("SELECT * FROM utente u  where u.stato=1");
        return view('cestino',['twitte'=> $twitte],['utente'=> $utente] );
    }


     
}
