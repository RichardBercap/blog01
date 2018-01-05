<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable=array('nombres','ap','am','ci','cel','direccion','foto');
}
