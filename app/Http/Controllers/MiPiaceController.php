<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\miPiace;

class MiPiaceController extends Controller
{
    public function crea(Request $request)
    {  $data = $request->input();
        $accetto2=$data['idTwitte'];
        $utente = DB::select('SELECT * FROM  utente u where u.stato=1');
        $miPiace = new miPiace ;	
        $miPiace ->twitte=$accetto2;
        foreach(  $utente as   $utentes){ $miPiace ->utente=$utentes->id;}
        $miPiace->save();
        return redirect('divtwitte')->with("Insert successfully");
    }
    public function crea2(Request $request)
    {  $data = $request->input();
        $accetto2=$data['idTwitte'];
        $utente = DB::select('SELECT * FROM  utente u where u.stato=1');
        $miPiace = new miPiace ;	
        $miPiace ->twitte=$accetto2;
        foreach(  $utente as   $utentes){ $miPiace ->utente=$utentes->id;}
        $miPiace->save();
        return redirect('utenteRicercato2')->with("Insert successfully");
    }
    public function crea3(Request $request)
    {  $data = $request->input();
        $accetto2=$data['idTwitte'];
        $utente = DB::select('SELECT * FROM  utente u where u.stato=1');
        $miPiace = new miPiace ;	
        $miPiace ->twitte=$accetto2;
        foreach(  $utente as   $utentes){ $miPiace ->utente=$utentes->id;}
        $miPiace->save();
        return redirect('profilo2')->with("Insert successfully");
    }
    public function delete1(Request $request)
    {  $data = $request->input();
        $id=$data['idT'];
        $utente = DB::select("SELECT * FROM  utente u where u.stato=1 ");
        foreach($utente as $utentes){
           $idu=$utentes->id;
        }
        $mipiace = DB::select("SELECT * FROM  miPiace p where p.twitte=$id and p.utente=$idu");
        foreach($mipiace as $mipiaces){
            $idp=$mipiaces->id;
        }
        miPiace::destroy($idp);
        return redirect('divtwitte')->with("Insert successfully");
    }
    public function delete2(Request $request)
    {  $data = $request->input();
        $id=$data['idMiPiace'];
        $utente = DB::select("SELECT * FROM  utente u where u.stato=1 ");
        foreach($utente as $utentes){
           $idu=$utentes->id;
        }
        $mipiace = DB::select("SELECT * FROM  miPiace p where p.twitte=$id and p.utente=$idu");
        foreach($mipiace as $mipiaces){
            $idp=$mipiaces->id;
        }
        miPiace::destroy($idp);
        return redirect('profilo2')->with("Insert successfully");
    }
    public function delete3(Request $request)
    {   $data = $request->input();
        $id=$data['idMiPiace'];
        $utente = DB::select("SELECT * FROM  utente u where u.stato=1 ");
        foreach($utente as $utentes){
           $idu=$utentes->id;
        }
        $mipiace = DB::select("SELECT * FROM  miPiace p where p.twitte=$id and p.utente=$idu");
        foreach($mipiace as $mipiaces){
            $idp=$mipiaces->id;
        }
        miPiace::destroy($idp);
        return redirect('utenteRicercato2')->with("Insert successfully");
    }
}
