<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ricercaProfilo extends Controller
{
    public function ricerca(Request $request)
    {
        try{
        $dati = $request->input();
        $nomeUtente=$dati['nomeUtente'];
        $utente = DB::table('utente')->where('nomeUtente','LIKE','%'.$nomeUtente.'%')->get();
        return view('ricercaProfilo',['utente'=> $utente] );
    }
    catch(Exception $e){
        return redirect('home')->with("operation failed");
    }
    }
}
