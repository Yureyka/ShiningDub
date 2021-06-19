<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShiningDub | Вход</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <main class="auth-page">
        <div class="auth-content">
            <h1 class="auth-title">Вход</h1>
            <form class="admin-form auth-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Логин" required autofocus>
                <input type="password" name="password" placeholder="Пароль" required>
                <button type="submit" class="button">
                    Войти
                </button>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </form>
        </div>
    </main>
</body>

</html>