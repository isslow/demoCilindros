<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    //
    protected $fillable=[
    	'titulo',
    	'descripcion',
    	'autor'
    ];
}
