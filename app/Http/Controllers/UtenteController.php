<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\utente;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UtenteController extends Controller
{
     
  public function registrazione(Request $request)
  {/*
    $rules = [
			'email' => 'required|string|min:3|max:255',
			'city_name' => 'required|string|min:3|max:255',
			'email' => 'required|string|email|max:255'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{...>>}*/
            $data = $request->input();
			
				$utente = new utente;
                $utente->nome= $data['nome'];
                $utente->cognome = $data['cognome'];
				$utenten=DB::select('SELECT * FROM utente u');
				foreach($utenten as $utentens){
					if($utentens->numero==$data['numero'])
					{$a=1;
						return view('iscrizione',['a'=> $a] );
					}
					else{
						$utente->numero = $data['numero'];
					}

					if($utentens->email==$data['email'])
					{$a=2;
						return view('iscrizione',['a'=> $a] );
					}
					else{
						$utente->email = $data['email'];
					}
   
					if($utentens->nomeUtente==$data['nomeUtente'])
					{$a=3;
						return view('iscrizione',['a'=> $a] );
					}
					else{
						$utente->nomeUtente = $data['nomeUtente'];
					}

				
			
				$anno=$data['anno'];
				$mese=$data['mese'];
				$giorno=$data['giorno'];
				$dataNascita="$anno".'/'."$mese".'/'."$giorno";
				$utente->dataNascita=$dataNascita;
				
				$cod=(($anno-$mese)-$giorno);
				$Password=''.$data['password'].''."$cod".'';
				$utente->password = $Password;
				$utente->save();
				return redirect('22');    }}

 public function acs(Request $request)
 {
	



	
	 $utenteLog=DB::select('SELECT * FROM utente where stato=1');
	 if(empty($utenteLog)){
  $data = $request->input();
   $Email= $data['Email'];
   $Password0=$data['Password'];
   
   $u = utente::where('email', "$Email")->first();
   $data=$u->dataNascita;
   $annos=substr("$data",0,4);
   $anno = (int)$annos;
   $meses=substr("$data",5,2);
   $mese = (int)$meses;
   $giornos=substr("$data",8,2);
   $giorno = (int)$giornos;
   $cod=(($anno-$mese)-$giorno);
  $Password=''."$Password0".''."$cod".'';
 foreach (utente::all() as $utentes) {
  $a=$utentes->email;
  $b=$utentes->password;
  if($Email==$a)
 {
  if($Password==$b) 
  {
	$c=$utentes->id;
    $utentes = utente::find($c);
    $a=1;
    $utentes ->stato = $a;
    
	$utentes->save();
    return redirect('/home');
  }
 
 }
}
	 }
	









	 return redirect('/accesso2');
}
 
 }
