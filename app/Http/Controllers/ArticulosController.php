<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateArticuloRequest;
use App\Http\Controllers\Controller;
use App\Articulos;
use Request;

class ArticulosController extends Controller
{
    public function index()
    {
    	$articulos=Articulos::all();
    	return view('Articulos/index',compact('articulos'));
    }
    public function show($id)
    {
    	$articulo=Articulos::find($id);
    	return view('Articulos/show',compact('articulo'));
    }
    public function create()
    {
        
        //$articulo=Articulos::find($id);
        return view('Articulos/create');
        
        //return 'crete';

    }

    public function store(CreateArticuloRequest $request)
    {
        ///CreateArticuloRequest $request    aqui primero accede a (app/http/request/CreateArticuloRequest/role)
        /// para realizar las validaciones si todo sale bien sigue con lo siguiente
        //$input = Request::all();
        
        Articulos::create($request->all());
        return redirect('articulos');
    }
    public function edit($id)
    {
        $articulo = Articulos::find($id);
        return view('Articulos/edit',compact('articulo'));
    }
    public function update($id,CreateArticuloRequest $request)
    {
        $articulo = Articulos::find($id);
        $articulo->update($request->all());
        return redirect('articulos');
    }
     public function destroy($id)
    {
        $articulo = Articulos::find($id);
        $articulo->delete();
        return redirect('articulos');
    }

    public function prevDelete($id)
    {
        $articulo = Articulos::find($id);
        return view('Articulos/prevDelete',compact('articulo'));
    }
}
