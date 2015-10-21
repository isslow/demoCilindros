@extends('Layout')
@section('contenido')
<div class="container">
    <div class="content">
        <div class="title">
                    bienvenido  {{-- $nombre --}} desde la pagina de acerca
         </div>
        @if (count($nombres)>0)
        <ul>
            @foreach($nombres as $nombre)
                <li>{{$nombre}}</li>
            @endforeach
        </ul>
        @else
            <p>no se enconto ningun nombre</p>   
        @endif
     </div>
</div>
@stop
   
