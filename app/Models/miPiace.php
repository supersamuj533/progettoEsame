<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miPiace extends Model
{
    use HasFactory;
    protected $table='miPiace';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = true ;
    protected $fillable=['id','data','utente','twitte'];
}
