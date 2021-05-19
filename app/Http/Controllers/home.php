<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class home extends Controller
{ 
    public function home()
    {   $twitte = DB::select(
        "SELECT count(p.id) as 'mip',t.titolo , t.text , t.data
    FROM mipiace p join twitte t on t.id=p.twitte 
    group by (p.twitte) 
    order by(mip) desc ");


  $utente = DB::select(
        "SELECT count(a.id) as 'ami',u.nomeUtente 
    FROM amicizia a join utente u on a.utenteAccetta=u.id 
    group by (a.utenteAccetta)
     order by(ami) desc ");

    return view('home',['twitte'=> $twitte],['utente'=> $utente]);
    }


     
}