<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShiningDub | 404</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <main class="error-page">
        <div class="error-page-content">
            <h1>404</h1>
            <h3>Упс... Такой страницы нет :(</h3>
            <a class="button" href="{{URL::route('main')}}">Вернуться на главную</a>
        </div>
    </main>
</body>

</html>