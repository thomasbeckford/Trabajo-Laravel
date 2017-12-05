@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mis ventas</div>
                <div class="panel-body">

    <h1>Elegiste el producto {{$prodFinal->producto}}</h1>
    <ul>
      <li>Valor: ${{ $prodFinal->precio }}</li>
      <li>Usuario: {{ $prodFinal->user_id }}</li>
    </ul>
      <br>


    @if ( $prodFinal->user_id == $id_usuario )
        <div class="top-right links">
            @auth
              <a href="/borrarProducto/{{$prodFinal->id}}">
                <button type="button" class="btn btn-danger" name="button">Borrar</button>
              </a>
            @else
            @endauth
        </div>
    @endif

@endsection
