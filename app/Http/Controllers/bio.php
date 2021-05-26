<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\utente;

class bio extends Controller
{
    public function modifica()
    { try{
       $bio=2;
       $utente = DB::select('SELECT * FROM utente where stato=1');
       
       foreach($utente as $utentes){$id=$utentes->id;}
       $utenteA = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteAccetta=$id ");
       $utenteR = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteRichiede=$id ");
       return view('mioProfilo',['utente'=> $utente,'bio'=>$bio, 'utenteA'=>$utenteA, 'utenteR'=>$utenteR] );
    }
    catch (Exception $e){ return redirect('/modificaBio');}
    }
    public function modifica2(Request $request)
    { 
        try{
        $data = $request->input();
        $bioText= $data['bio'];
        utente::where('stato', 1)
      ->update(['bio' => $bioText]);
       $bio=1;
       $utente = DB::select('SELECT * FROM utente where stato=1');
       foreach($utente as $utentes){$id=$utentes->id;}
       $utenteA = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteAccetta=$id ");
       $utenteR = DB::select("SELECT count(a.id) as 'count' FROM amicizia a where a.utenteRichiede=$id ");
       return view('mioProfilo',['utente'=> $utente,'bio'=>$bio, 'utenteA'=>$utenteA, 'utenteR'=>$utenteR] );
        }
        catch (Exception $e){ return redirect('/modificaBio2');}
    }
   
}
