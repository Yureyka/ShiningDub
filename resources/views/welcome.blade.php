<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <title>ShiningDub</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('metrics')
</head>

<body>
    <div class="container">
        @include('header')
        <main class="row">
            <section class="col-md-12 col-lg-8">
                <div class="content-block">
                    <h1 class="content-title">Последние озвучки</h1>
                    @if ($data->isEmpty())
                    <h3>Упс... Тут пусто :(</h3>
                    @endif

                    @foreach ($data as $item)
                    <article class="home-card">
                        <h2>{{ $item->title }}</h2>
                        <div class="row align-items-center">
                            <div class="col-md-5 home-card-img">
                                <img src="{{ $item->poster ? $item->poster : 'img/not-found.png' }}">
                            </div>
                            <div class="col-md-7">
                                <p>{{ strlen($item->desc) >= 400 ? mb_strcut($item->desc, 0, 400)."..." : $item->desc }}</p>
                            </div>
                        </div>
                        <div class="main-video-link">
                            <a class="button" href="/video/{{ $item->id }}">Смотреть</a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </section>
            <aside class="col-md-12 col-lg-4">
                <div class="content-block">
                    <h3 class="content-title">Новости</h3>
                    @if ($news->isEmpty())
                    <h5>Упс... Тут пусто :(</h5>
                    @endif

                    @foreach ($news as $item)
                    <article class="news-card">
                        <a class="news-link" href="/news/{{ $item->id }}">
                            <h5>{{ $item->title}}</h5>
                        </a>
                        <p>{!! strlen($item->desc) >= 200 ? mb_strcut($item->desc, 0, 200)."..." : $item->desc !!}</p>
                    </article>
                    @endforeach
                </div>
            </aside>
        </main>
        @include('footer')
    </div>
    @include('scrollup')
    <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>