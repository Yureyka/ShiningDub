<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <title>ShiningDub | Редактирование видео</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        @include('header')
        <main class="row">
            <section class="col-md-12">
                <div class="content-block">
                    <h1 class="content-title">Редактирование видео</h1>
                    <form class="admin-form" action="{{ route('update-video', $data->id) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                        <input type="text" name="title" placeholder="Название" value="{{ $data->title }}" required>
                        <textarea name="desc" placeholder="Описание" rows="6">{{ $data->desc }}</textarea>
                        <input type="text" name="link" placeholder="Ссылка на видео" value="{{ $data->link }}" required>
                        <input type="file" name="poster">
                        <button type="submit" class="button">Принять</button>
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