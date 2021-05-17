<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\utente;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class logOutControll extends Controller
{
 

 public function logControll(Request $request)
   {
	 $utenteLog=DB::select('SELECT * FROM utente where stato=1');
	 if(empty($utenteLog))
      {
        return view('acc&log');
        }
	 else{
          return view('home');
        }
    }
}