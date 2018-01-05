<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comprasrapidas extends Model
{
    protected $table = 'comprasrapidas';
    //permitir guardar los siguientes campos
    protected $fillable=array('titulo','detalle','fecha','total');
}
