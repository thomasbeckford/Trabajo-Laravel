@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Modificar Producto</div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="/modificar/{{$producto->id}}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Id del producto</label>
                    <div class="col-md-6">
                        <label for="name" class="control-label">{{$producto->id }} </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Marca del producto:</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="producto" value="{{ $producto->producto }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="col-md-4 control-label">Precio en $ARS: </label>
                    <div class="col-md-6">
                        <input id="price" type="number" class="form-control" name="precio" value="{{ $producto->precio }}" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="category" class="col-md-4 control-label">Categoria: </label>
                    <div class="col-md-6">
                      <select required name="category" class="form-control">
                        <option value=""></option>
                        <option value="computadora">Computadora</option>
                        <option value="celular">Telefono celular</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-md-4 control-label">Descripcion: </label>
                    <div class="col-md-6">
                        <textarea id="description" type="text" class="form-control" for="comment" name="descripcion" value="" >{{ $producto->descripcion }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-md-4 control-label">Imagen del producto:</label>
                    <div class="col-md-6">
                        <input id="imagen" type="file" class="form-control" name="imagen">
                    </div>
                </div>
                <div class="form-group">
                  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Modificar producto
                        </button>
                    </div>
                </div>
            </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
