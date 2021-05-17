<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utente;
class fotoProfilo extends Controller
{
    public function delete(Request $request)
    {
        $data = $request->input();
        Utente::where('stato', '=', 1)->update(['immagine' => $data['foto']]);
        return redirect('profilo');  
   }
}
