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
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
            }

            .title {
                font-size: 84px;
            }

            .service-category{

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

            <div class="content">
                <h2>Our Services</h2>
		<div class="service-category">
		    <p><a href="{{route('car_gallery_painting')}}">Painting Works</a></p>
		    <p><a href="{{route('car_gallery_straightening')}}">Straightening</a></p>
		    <p><a href="{{route('car_gallery_bodyparts_replacement')}}">Body Parts Replacement</a></p>
		</div>
		<div>
		    <form action="{{ route('services') }}" method="POST" class="form-horizontal">
			{{ csrf_field() }}

			<!-- Имя задачи -->
			<div class="form-group">
			    <label for="task" class="col-sm-3 control-label">New Service</label>

			    <div class="col-sm-6">
				<input type="text" name="name" id="task-name" class="form-control">
			    </div>
			</div>

			<!-- Кнопка добавления задачи -->
			<div class="form-group">
			    <div class="col-sm-offset-3 col-sm-6">
				<button type="submit" class="btn btn-default">
				    <i class="fa fa-plus"></i> add service category
				</button>
			    </div>
			</div>
		    </form>
		</div>
            </div>
        </div>
    </body>
</html>


