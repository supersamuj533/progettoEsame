<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accetto extends Controller
{
    public function a(Request $request)
    {
      $data = [];
      $data = [
        'accetto1' => 'no',
        'accetto2' => 'no'
        ];
     $data = $request->input();
   
     $accetto1= $data['accetto1'];
     $accetto2= $data['accetto2'];

     if($accetto1=="si")
     {
     if($accetto2=="si") 
     {
       $a=0;
      return view('iscrizione',['a'=> $a] );
     }
     }else{return view('accetta');}
   
   }
}
