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
  {/* $this->validate($request, [

    ]);*/

		$validator = Validator::make($request->all(), [
			'nome' => 'required|min:0|max:20',
		]);
		$validator2 = Validator::make($request->all(), [
			'cognome' => 'required|min:0|max:20',
		]);
		$validator3 = Validator::make($request->all(), [
			'numero' => 'required|min:0|max:10',
			'numero' =>'integer',
			'numero' =>'numeric',
		]);
		$validator4 = Validator::make($request->all(), [
			'email' => 'required|min:0|max:30',
		]);
		$validator5 = Validator::make($request->all(), [
			'password' => 'required|min:0|max:20',
		]);
		$validator6 = Validator::make($request->all(), [
			'nomeUtente' => 'required|min:0|max:15',
		]);
		$validator7 = Validator::make($request->all(), [
			'anno' => 'required|min:4|max:4',
			'anno' =>'integer',
			'anno' =>'numeric',
		]);
		$validator8 = Validator::make($request->all(), [
		'mese' => 'required|min:2|max:2',
		'mese' =>'integer',
			'mese' =>'numeric',
		]);
		$validator9 = Validator::make($request->all(), [
	   'giorno' => 'required|min:2|max:2',
	   'giorno' =>'integer',
			'giorno' =>'numeric',	
		]);
		if ($validator->fails()) {
			$a=4;
			return view('iscrizione',['a'=> $a] );
		}
		if ($validator2->fails()) {
			$a=5;
			return view('iscrizione',['a'=> $a] );
		}
		if ($validator3->fails()) {
			$a=6;
			return view('iscrizione',['a'=> $a] );
		}
		if ($validator4->fails()) {
			$a=7;
			return view('iscrizione',['a'=> $a] );
		}
		if ($validator5->fails()) {
			$a=8;
			return view('iscrizione',['a'=> $a] );
		}
		if ($validator6->fails()) {
			$a=9;
			return view('iscrizione',['a'=> $a] );
		}
		if ($validator7->fails()) {
			$a=10;
			return view('iscrizione',['a'=> $a] );
		}
		if ($validator8->fails()) {
			$a=11;
			return view('iscrizione',['a'=> $a] );
		}
		if ($validator9->fails()) {
			$a=12;
			return view('iscrizione',['a'=> $a] );
		}
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
				$utente->immagine="2.jpg";
				$cod=(($anno-$mese)-$giorno);
				$Password=''.$data['password'].''."$cod".'';
				$utente->password = $Password;
				$utente->save();
				return redirect('index');    }}

 public function acs(Request $request)
 {
	



	

  $data = $request->input();
   $Email= $data['Email'];
   $Password0=$data['Password'];
   
   $u = utente::where('email', "$Email")->first();
   if(empty($u->dataNascita))
   { $data='0000/00/00';}
   else{
	$data=$u->dataNascita;
   }
 



   $annos=substr("$data",0,4);
   $anno = (int)$annos;
   $meses=substr("$data",5,2);
   $mese = (int)$meses;
   $giornos=substr("$data",8,2);
   $giorno = (int)$giornos;
   $cod=(($anno-$mese)-$giorno);
  $Password=''."$Password0".''."$cod".'';
  if(empty($u->email)){
	$a='*******';
  }
  else{
  $a=$u->email;}
  if(empty($u->password)){
	$b='*******';
  }
  else{
  $b=$u->password;}
  if($Email==$a)
 {
  if($Password==$b) 
  {
	$c=$u->id;
    $utentes = utente::find($c);
    $a=1;
    $utentes ->stato = $a;
    
	$utentes->save();
    return redirect('/home');
  }
 
 }

	 
	









	 return redirect('/accesso2');
}
 
 }
