<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\twitte;

class cestino extends Controller
{ 
    
    public function crea2(Request $request)
    {  
        $data = $request->input();
        $idTwitte= $data['idTwitte'];
        twitte::where('id', '=', $idTwitte)->update(['tipo' => 3]);
       $utente = DB::select('SELECT * FROM utente where stato=1');
       foreach($utente as $utentes){$idUtente=$utentes->id;} 
     
       $twitte = DB::select("SELECT * FROM twitte t where t.utente=$idUtente and t.tipo<>3  order by t.data desc   ");
     
       $mipiace=DB::select("SELECT * from mipiace p where p.utente=$idUtente ");
       $mipiaceTot=DB::select("SELECT count(p.id) as 'ContaCuore', p.twitte from mipiace p group by(p.twitte) ");
           return view('mioProfilo2',['twitte'=> $twitte, 'mipiace'=> $mipiace,'mipiaceTot'=> $mipiaceTot]);
    }
  
}
