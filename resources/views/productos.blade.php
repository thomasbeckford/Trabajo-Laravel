@extends('layouts.app')

<style media="screen">

  li.productos {
    margin-bottom: 50px
  }
  img {
    width: 200px;
    height: 120px;
    border: 5px solid black;
    float:left;

  }

  .padding{
    margin-left:60px;
  }


</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Todos nuestros productos</div>
                <div class="panel-body">
                  <ul>
                  @if (count($productos) > 0)
                    @foreach ($productos as $producto)
                      <li class="productos">
                            <a href="/misProductos/{{$producto->id}}">
                              <img src="{{ $producto->getPoster() }}" alt="">
                            </a>
                            <div class="col-md-offset-6 col-sm-offset-5 col-xs-offset-8">
                              <a href="/misProductos/{{$producto->id}}">
                                <h3>{{$producto->producto}}</h3>
                              </a>
                                <h5>${{$producto->precio}}</h5>
                            </div>
                      </li>
                    @endforeach
                  @else
                    <p>No hay productos</p>
                  @endif
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
