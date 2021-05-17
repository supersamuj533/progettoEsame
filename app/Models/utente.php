<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utente extends Model
{
    use HasFactory;
    protected $table='utente';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = true ;
    protected $fillable=['id','nomeUtente','nome','cognome','email','password','dataNascita','numero','stato'];
  
}
