<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class twitte extends Model
{
    use HasFactory;
    protected $table='twitte';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = true ;
    protected $fillable=['id','imm','text','data','titolo','utente','tipo'];
  
}
