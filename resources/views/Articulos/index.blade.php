@extends('layout')
@section('contenido')
<br>
<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="row">
			<div class="col-lg-4">Lista de Artículos</div>
			<div class="col-lg-4"></div>
			<div class="col-lg-4 text-right"><a href="articulos/create" class="btn btn-primary">Crear Nuevo</a></div>
		</div>
	</div>
	<table class="table table-responsive table-bordered">
		<thead>
			<tr>
				<th>Artículo</th>
				<th>Autor</th>
				<th></th>
			</tr>			
		</thead>
		<tbody>
			@foreach($articulos as $articulo)
			<tr>
				<td>{{$articulo->titulo}}</td>
				<td>{{$articulo->autor}}</td>
				<td>
					<a href="/articulos/{{$articulo->id}}/edit" class="btn btn-warning btn-xl">Edit</a>
					<a href="/articulos/{{$articulo->id}}" class="btn btn-default btn-xl">Detalle</a>
					<a href="/articulos/{{$articulo->id}}/prevDelete" class="btn btn-danger btn-xl">Eliminar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
