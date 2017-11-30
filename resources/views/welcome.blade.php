<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcomeStyle.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    </head>
    <body>
        <div class="title-container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                      <!-- <input type="text" name="" value="" autofocus> -->
                        <a href="{{ url('/home') }}">Home</a>

                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title">
                    <h1>Freemarket</h1>
                </div>
                  <div class="subtitle">
                    <p>¿Que buscas?</p>
                  </div>
                  <div class="mybtn">
                    <form action="/compus">
                      <button type="submit" name="buscarCompus">Computadoras</button>
                    </form>
                    <form action="/telefonos">
                      <button type="submit" name="buscarTelefonos">Telefonos Celulares</button>
                    </form>
                  </div>
            </div>

        </div>
    </body>
</html>
