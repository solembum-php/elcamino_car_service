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
                color: #000;
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
                color: #000;
		text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #000;
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
            .contact-info{
                color: #006666;
            }
	    h2{
		color: #e65c00;
	    }
	    table{
		text-align: left;
	    }
	    th{
		color: #339966;
	    }
	    
        </style>
    </head>
    <body>
        <div class="content"> 
	    <a id="homelink" href="{{ route('home.index') }}">Home</a>
            <h2>Прайслист</h2>
            <table class="price-table">
                <tr>
                    <th>Вид услуг</th>
                    <th>Стоимость, грн.</th>
                </tr>
                <tr>
                    <td>Покраска капота</td>
                    <td>1000</td>
                </tr>
		<tr>
                    <td>Полировка кузова</td>
                    <td>2500</td>
                </tr>
		<tr>
                    <td>Покраска крыши</td>
                    <td>1500</td>
                </tr>
		<tr>
                    <td>Рихтовка</td>
                    <td>500</td>
                </tr>
            </table>
        </div>
    </body>
</html>





