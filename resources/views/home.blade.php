<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ffff99;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: bold;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                background-color: #339966;
                color: #ffff66;
                font-size: 30px;
            }

            .logo{
                width: 150px;
                height: 150px;
                border-radius: 50%;
                font-size: 25px;
                color: #cc6699;
                text-align: center;
                background: #000;
            }
            .logo-name{
                font-size: 30px;
            }
            .logo-type{
                font-size: 18px;
            }
            .title {
                font-size: 80px;
                color: #4d2600;
            }
            .my-links{
                display: block;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
            @endif

            <header>
                <div class="logo">
                    <p class="logo-type">Best</p>
                    <p class="logo-name">El Camino</p>
                    <p class="logo-type">Car Service</p>

                </div>
            </header>
            <div class="content">
                <div class="title m-b-md">
                    El Camino Car Service
                </div>
                <p>
                    If you want to have your car painted really well, you've come to the right place!!!
                </p>
                <div class="my-links">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('our_works')}}">Our Works</a>
                    <a href="{{route('pricelist')}}">Price List</a>
                </div>
            </div>

        </div>
    </body>
</html>


