@extends('layouts.app')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<style media="screen">
  img{
    width: 360px;
    float: left
  }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Descripcion del producto</div>
                <div class="panel-body">

    <h1>{{$prodFinal->producto}}</h1>

    <ul>
      <img src="{{ $prodFinal->getPoster() }}" alt="">
        <div class="col-md-offset-7 col-sm-offset-5 col-xs-offset-8">
      <li><h3>${{ $prodFinal->precio }}</h3></li>
        </div>
    </ul>


      <br>
    @if ( $prodFinal->user_id == $id_usuario )
        <div class="top-right links col-md-offset-7">
              <h4 >{{ $prodFinal->descripcion }}</h4>
                <br>
              <a href="/borrarProducto/{{$prodFinal->id}}">
                <button type="button" class="btn btn-danger" name="button">Borrar</button>
              </a>
              <a href="/modificar/{{$prodFinal->id}}">
                <button type="button" class="btn btn-warning" name="button">Modificar</button>
              </a>
            @else
            <div class="top-right links col-md-offset-7">
                  <h4 >{{ $prodFinal->descripcion }}</h4>
                    <br>
<script type="text/javascript">

$(document).ready(function(){
  $("#btn1").click(function() {
        alert("SweetAlert en construccion!!!.");
    });
});
</script>
              <button id="btn1" type="button" class="btn btn-primary" name="button">Comprar</button>

        </div>
    @endif

@endsection
