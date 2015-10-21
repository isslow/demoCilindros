<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
    //
    public function acerca()
    {
    	//$nombre='Jesus Ivan';
    	//$nombres=['jesus','ivan','issmar','miguel','rey','salvador'];
    	$nombres=[];
    	return view('paginas/acerca',compact('nombres'));
    }
}
