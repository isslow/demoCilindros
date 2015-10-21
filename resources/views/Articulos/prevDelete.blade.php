@extends('layout')
@section('contenido')
	<div class="panel panel-danger">
		<div class="panel-heading"><h3>¿Esta Seguro de Aliminar el Artículo #{{$articulo->id}} ?</h3></div>
		  <div class="panel-body">
		    <label>Título: {{$articulo->titulo}}</label>
		    <hr>
		    <label>Descripcion:</label>
		    <p>{{$articulo->descripcion}}</p>
		    <hr>
		    <label>Autor: {{$articulo->autor}}</label>
		  </div>
		  <div class="panel-footer">
	
			{!! Form::open(['method'=>'DELETE','route'=>['articulos.destroy',$articulo->id]]) !!}
				{!!Form::submit('Eliminar Artículo',['class'=>'btn btn-danger form-control'])!!}
			{!! Form::close() !!}
		   </div>
		</div>
	<div class="text-left">
		<a href="/articulos" class="btn btn-warning">Cancelar / Regresar a Artículos</a>
	</div>
@stop