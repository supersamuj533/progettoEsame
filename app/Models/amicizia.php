<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amicizia extends Model
{
    use HasFactory;
    protected $table='amicizia';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = true ;
    protected $fillable=['id','data','utenteAccetta','utenteRifiuta'];
}
