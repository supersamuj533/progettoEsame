<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\twitte;

class twitteRic extends Controller
{ 
    public function cerca(Request $request)
    {  
        $dati = $request->input();
        $parolaChiave=$dati['parolaChiave'];
     $twitte= DB::table('twitte')->where('text','LIKE','%'. $parolaChiave.'%' )
                      ->get();
        return view('twitteRicerca2',['twitte'=> $twitte]);
     
}


     
    }

