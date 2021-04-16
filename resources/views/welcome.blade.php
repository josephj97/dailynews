<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: sans-serif, Cortoba;
                /*font-weight: 200;*/
                /*height: 100vh;*/
                margin: 0;
            }
            h2 {
                margin: 0;
                font-family: "DejaVu Sans Condensed";
                color: crimson;
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
                margin-bottom: 30px;
            }

            .card {
                background-color: darkcyan;
                padding: 20px;
                margin: 20px;
                color: white;
                border-radius: 25px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }


        </style>
    </head>
    <body>
        <div class="container-fluid jumbotron position-ref full-height">
            <div class="content">
                <div class="title">
                    <h2>Daily News</h2>
                </div>
            </div>
            @foreach($news as $new)
                <div class="row">
                    <div class="card rounded">
                        <h3>{{$new->title}}</h3>
                        <h5>Agency: {{$new->agency_id}}, DateTime: {{$new->datetime}}</h5>
                        <p>Rating: {{$new->rating}}/10</p>
                        <p>{{$new->content}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
