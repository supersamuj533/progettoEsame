<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class home extends Controller
{ 
    public function home()
    {
        
        try{
        $twitte = DB::select(
        "SELECT count(p.id) as 'mip',t.titolo , t.text , t.data
    FROM mipiace p join twitte t on t.id=p.twitte 
    group by (p.twitte) 
    order by(mip) desc ");


  $utente = DB::select(
        "SELECT count(a.id) as 'ami',u.nomeUtente 
    FROM amicizia a join utente u on a.utenteAccetta=u.id 
    group by (a.utenteAccetta)
     order by(ami) desc ");
     
$message='';
    return view('home',['twitte'=> $twitte],['utente'=> $utente,'message'=> $message]);
  }
  catch (Exception $e){ return redirect('/home');} 
    }

    public function home2()
    {
        try{
        $twitte = DB::select(
            "SELECT count(p.id) as 'mip',t.titolo , t.text , t.data
        FROM mipiace p join twitte t on t.id=p.twitte 
        group by (p.twitte) 
        order by(mip) desc ");
    
    
      $utente = DB::select(
            "SELECT count(a.id) as 'ami',u.nomeUtente 
        FROM amicizia a join utente u on a.utenteAccetta=u.id 
        group by (a.utenteAccetta)
         order by(ami) desc ");
        $message='Inserisci un twitte non superiore ai 254 caratteri';
        return view('home',['twitte'=> $twitte],['utente'=> $utente,'message'=> $message]);
      }
      catch (Exception $e){ return redirect('/home2');} 
    }
}