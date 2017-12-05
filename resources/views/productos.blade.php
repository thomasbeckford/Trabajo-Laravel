@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar productos en venta</div>
                <div class="panel-body">
                  <ul>
                  @if (count($productos) > 0)
                    @foreach ($productos as $producto)
                      <li style="margin-bottom: 30px;">
                        <a href="/misProductos/{{$producto->id}}">
                          <h3 style="display: inline">{{$producto->producto}}</h3>
                          <p></p>
                        </a>
                          <h4 style="display: inline">{{$producto->category}}</h4>
                          <h5 style="display: inline">${{$producto->precio}}</h5>
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
