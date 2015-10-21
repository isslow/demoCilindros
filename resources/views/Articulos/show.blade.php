@extends('layout')
@section('contenido')
	<div class="panel panel-info">
	  <div class="panel-heading"><h3>Detalle del Artículo #{{$articulo->id}}</h3></div>
	  <div class="panel-body">
	    <label>Título: {{$articulo->titulo}}</label>
	    <hr>
	    <label>Descripcion:</label>
	    <p>{{$articulo->descripcion}}</p>
	    <hr>
	    <label>Autor: {{$articulo->autor}}</label>
	  </div>
	</div>
	<div class="text-left">
		<a href="/articulos/{{$articulo->id}}/edit" class="btn btn-success btn-xl">Edit</a>
		<a href="/articulos" class="btn btn-warning">Cancelar / Regresar a Artículos</a>
		<a href="/articulos/{{$articulo->id}}/prevDelete" class="btn btn-danger btn-xl">Eliminar</a>
	</div>
@stop


