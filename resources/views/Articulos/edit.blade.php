@extends('layout')
@section('contenido')
<div class="panel panel-info">
	  <div class="panel-heading"><h3>Editar el Artículo #{{$articulo->id}}</h3></div>
	  <div class="panel-body">
	    {!! Form::model($articulo, ['method'=>'PATCH','action'=>['ArticulosController@update',$articulo->id]]) !!}
			<div class="form-group">
				{!!Form::label('lblTitulo','Título: ')!!}
				{!! Form::text('titulo',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('lblDescripcion','Descripción: ')!!}
				{!! Form::text('descripcion',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('lblAutor','Autor: ')!!}
				{!! Form::text('autor',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::submit('Editar Artículo',['class'=>'btn btn-info form-control'])!!}
				
			</div>
		{!! Form::close() !!}
	  </div>
	  <div class="panel-footer">
	  	<div class="form-group">
			<a href="/articulos/{{$articulo->id}}/prevDelete" class="btn btn-danger btn-xl">Eliminar</a>
		</div>
		<div class="text-left">
			<a href="/articulos" class="btn btn-warning">Cancelar / Regresar a Artículos</a>
		</div>		
	  </div>
	</div>
	
	
	@if($errors->any())
		
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				
			@endforeach
		</ul>
		
	@endif
@stop