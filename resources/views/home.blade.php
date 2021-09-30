<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Городской портал</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>

<body>
    @extends('layout.app')
    @section('content')
        <div class="jumbotron">
            <div class="container">
                <h1>Привет, дорогой друг!</h1>
                <p>
                    Вместе мы сможем улучшить наш любимый город. Нам очень сложно узнать обо всех проблемах города, поэтому
                    мы
                    предлагаем тебе помочь своему городу!
                </p>
                <p>
                    Увидел проблему? Дай нам знать о ней и мы ее решим!
                </p>
                <p>
                    <a class="btn btn-success btn-lg" href="#" role="button">Сообщить о проблеме</a>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Присоедениться к проекту</a>
                </p>
            </div>
        </div>

        <div class="container">
            <h2>Последние решенные проблемы</h2>
            <br>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/solve2.png" alt="Яма на дороге">
                        <img src="img/problem2.png" alt="Яма на дороге">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/solve2.png" alt="Яма на дороге">
                        <img src="img/problem2.png" alt="Яма на дороге">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/solve2.png" alt="Яма на дороге">
                        <img src="img/problem2.png" alt="Яма на дороге">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/solve2.png" alt="Яма на дороге">
                        <img src="img/problem2.png" alt="Яма на дороге">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/solve2.png" alt="Яма на дороге">
                        <img src="img/problem2.png" alt="Яма на дороге">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/solve2.png" alt="Яма на дороге">
                        <img src="img/problem2.png" alt="Яма на дороге">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/solve2.png" alt="Яма на дороге">
                        <img src="img/problem2.png" alt="Яма на дороге">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/solve2.png" alt="Яма на дороге">
                        <img src="img/problem2.png" alt="Яма на дороге">
                    </div>
                </div>
            </div>
        </div>
    @endsection

</body>
</html>
