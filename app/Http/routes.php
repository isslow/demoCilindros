<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','WelcomeController@index');
Route::get('articulos/{id}/prevDelete', 'ArticulosController@prevDelete');
Route::resource('articulos','ArticulosController');
//Route::get('home','HomeController@index');
//Route::get('articulos','ArticulosController@index');
//Route::get('articulos/crear','ArticulosController@create');
//Route::get('articulos/{id}','ArticulosController@show');

//Route::post('articulos','ArticulosController@store');

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);

Route::get('articulos', function () {
	/*$articulos=App\Articulos::all();
    return $articulos;
    
    $articulos= App\Articulos::all();
    return $articulos;
});
Route::get('articulos/crear', function () {
	/*$articulos=App\Articulos::all();
    return $articulos;
    
    $articulo= new App\Articulos;
    $articulo->titulo='ejemplo désde la APP';
    $articulo->descripcion='estoy insertando desde la app para ver como funcióna piñata';
    $articulo->autor='miguel';
    $articulo->save();
    

});
Route::get('articulos/edit', function () {
	/*$articulos=App\Articulos::all();
    return $articulos;
    
    $articulo= App\Articulos::find(2);
    $articulo->titulo='este articulo se edito';
    $articulo->descripcion='para ver como funcióna piñata';
    $articulo->autor='miguel felix';
    $articulo->save()
    
});
Route::get('articulos/edit', function () {
	/*
    $articulo= App\Articulos::find(3);
    $articulo->delete();


});
*/


//Route::get('acerca','PaginasController@acerca');