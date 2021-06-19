<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <title>ShiningDub | Добавление видео</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        @include('header')
        <main class="row">
            <section class="col-md-12">
                <div class="content-block">
                    <h1 class="content-title">Добавление видео</h1>
                    <form class="admin-form" action="{{ route('add-video') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" name="title" placeholder="Название" required>
                        <textarea name="desc" placeholder="Описание" rows="6" required></textarea>
                        <input type="text" name="link" placeholder="Ссылка на видео" required>
                        <input type="file" name="poster" required>
                        <button type="submit" class="button">Добавить</button>
                    </form>
                </div>
            </section>
        </main>
        @include('footer')
    </div>
    @include('scrollup')
    <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>