<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <title>ShiningDub | {{ $data->title }}</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        @include('header')
        <main class="row">
            <section class="col-md-12">
                <div class="content-block">
                    <h2 class="content-title">{{ $data->title }}</h2>
                    <p>{!! $data->desc !!}</p>
                </div>
            </section>
        </main>
        @include('footer')
    </div>
    @include('scrollup')
    <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>