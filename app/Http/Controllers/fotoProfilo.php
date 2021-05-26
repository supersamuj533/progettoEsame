<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utente;
class fotoProfilo extends Controller
{
    public function modifica(Request $request)
    { try{
        $data = $request->input();
        Utente::where('stato', '=', 1)->update(['immagine' => $data['foto']]);
        return redirect('profilo'); 
    }
    catch (Exception $e){ return redirect('/foto2');} 
   }
}
