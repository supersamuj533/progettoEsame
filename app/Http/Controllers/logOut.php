<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\twitte;
use App\Models\utente;

class logOut extends Controller
{
    public function out(Request $request)
    {
        
        $dati = $request->input();
        $utente = utente::where('stato', 1)->first();
       $utente->stato=0 ;
       $utente->save();
       return redirect('index')->with("Insert successfully");
    }
}
