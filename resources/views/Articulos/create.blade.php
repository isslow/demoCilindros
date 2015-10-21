@extends('layout')
@section('contenido')
	<h3>Crear Artículo</h3>
	{!! Form::open(['url'=>'articulos']) !!}
	<div class="form-group">
		{!!Form::label('lblTitulo','Título: ')!!}
		{!! Form::text('titulo',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!!Form::label('lblDescripcion','Descripción: ')!!}
		{!! Form::textarea('descripcion',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!!Form::label('lblAutor','Autor: ')!!}
		{!! Form::text('autor',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!!Form::submit('Crear Artículo',['class'=>'btn btn-info form-control'])!!}
		
	</div>
	{!! Form::close() !!}
	<div class="text-left">
		<a href="/articulos" class="btn btn-warning">Cancelar / Regresar a Artículos</a>
	</div>
	
	@if($errors->any())
		
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				
			@endforeach
		</ul>
		
	@endif
@stop