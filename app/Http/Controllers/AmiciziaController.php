<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\amicizia;

class AmiciziaController extends Controller
{
    public function crea()
    { try{
        $utente = DB::table('utente')->where('stato','=',3)->get();
        $user = DB::table('utente')->where('stato','=',1)->get();
        foreach($utente as $utentes){$id=$utentes->id;}
        $utenteA = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteAccetta=$id ");
        $utenteR = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteRichiede=$id ");
        $amicizia = new amicizia;
				foreach($utente as $utentes){
        $amicizia->utenteAccetta= $utentes->id;}
        foreach($user as $users){
        $amicizia->utenteRichiede =$users->id;}
          $amicizia->save();
          
     
        $boolean='true';
       
      

         
        $utente = DB::select('SELECT * FROM utente u where u.stato=3');
        return view('Profilo',['utente'=> $utente] ,['boolean'=>$boolean,'utenteA'=>$utenteA, 'utenteR'=>$utenteR]);
      
        }
        catch (Exception $e){ return redirect('/follow');}
        
      
    }

    public function delete ()
    { 
      try{
      $utente = DB::table('utente')->where('stato','=',3)->get();
      foreach($utente as $utentes){$id=$utentes->id;}
      $utenteA = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteAccetta=$id ");
      $utenteR = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteRichiede=$id ");
      $utente = DB::select('SELECT * FROM utente u where u.stato=3');
    
          $ai= DB::select('SELECT a.id, a.data FROM amicizia a join utente u on u.id=a.utenteAccetta
          join utente u2 on u2.id=a.utenteRichiede
           where u.stato=3 and u2.stato=1');
      

        foreach($ai as $ais){
         $iD=$ais->id;
          $res = amicizia::destroy($iD);
        }
       

        $boolean='false';
        return view('Profilo',['utente'=> $utente] ,['boolean'=>$boolean,'utenteA'=>$utenteA, 'utenteR'=>$utenteR]);
      }
      catch (Exception $e){ return redirect('/followDelete');}
    }
}
