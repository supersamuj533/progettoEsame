<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\utente;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class accesso extends Controller
{
 public function acs(Request $request)
 {
     $a=1;
return view('accesso',['a'=> $a] );
}
public function acs2(Request $request)
 {
     $a=2;
return view('accesso',['a'=> $a] );
}
 
 }
