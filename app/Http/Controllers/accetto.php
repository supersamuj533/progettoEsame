<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accetto extends Controller
{
    public function a(Request $request)
    {
     try{
     $data = $request->input();
   if(empty($data['accetto1']))
   {$accetto1="no";}
   else {
     $accetto1= $data['accetto1'];}
     if(empty($data['accetto2'])){
      $accetto2="no";
     }
     else{
     $accetto2= $data['accetto2'];}

     if($accetto1=="si")
     {
     if($accetto2=="si") 
     {
       $a=0;
      return view('iscrizione',['a'=> $a] );
     }else{
       $message='Devi accettare le condizioni per proseguire';
       return view('accetta',['message'=>$message]);}
     }else{
      $message='Devi accettare le condizioni per proseguire';
       return view('accetta',['message'=>$message]);}
     }
     catch (Exception $e){
      return redirect('/accettaCont');
     }

   
   }
   public function b(Request $request)
    {
      try{
      $message='';
      return view('accetta',['message'=>$message]);}
      catch (Exception $e){
        return redirect('/accetta');
       }
    }
}
