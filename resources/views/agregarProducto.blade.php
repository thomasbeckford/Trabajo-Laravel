@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Agregar Producto</div>



                  <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="/agregarProducto">
                          {{ csrf_field() }}

                          <div class="form-group">
                              <label for="name" class="col-md-4 control-label">Nombre</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                              </div>
                          </div>

                          <div class="form-group">
                              <label for="price" class="col-md-4 control-label">Precio</label>

                              <div class="col-md-6">
                                  <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" required>

                              </div>
                          </div>

                          <div class="form-group">
                              <label for="image" class="col-md-4 control-label">Imagen</label>

                              <div class="col-md-6">
                                  <input id="image" type="file" class="form-control" name="image">

                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Agregá!
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
