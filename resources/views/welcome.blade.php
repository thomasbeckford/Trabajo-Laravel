<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Freemarket</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcomeStyle.css') }}" rel="stylesheet">
        <link href="{{ asset('css/rocket.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

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

                    <div id="scene">
                      <div data-depth="0.2">
                        <p>Computadoras y Celulares</p>
                      </div>
                    </div>

                  </div>
                    <div class="mybtn">
                      <form action="/productos">
                        <input type="submit" value="Ver productos en venta" />
                    </form>
                  </div>
            </div>

        </div>

<script type="text/javascript">
var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);
</script>
    </body>
</html>
