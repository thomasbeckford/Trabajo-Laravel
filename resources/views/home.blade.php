@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">El primer sitio para comprar y vender en todo el mundo!</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                      <p>Bienvenido, que hacemos?</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
