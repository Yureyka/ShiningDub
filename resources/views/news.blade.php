<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <title>ShiningDub | Новости</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('metrics')
</head>

<body>
    <div class="container">
        @include('header')
        <main class="row">
            <section class="col-md-12">
                <div class="content-block">
                    <div class="content-header">
                        <h1 class="content-title">Новости</h1>
                        @if (Auth::user() && Auth::user()->isAdmin)
                        <a class="button" href="{{URL::route('addnews')}}">Добавить</a>
                        @endif
                    </div>
                    @if ($data->isEmpty())
                    <h3>Упс... Тут пусто :(</h3>
                    @endif

                    @foreach ($data as $item)
                    <article class="news-item">
                        <h3>{{ $item->title }}</h3>
                        <p>{!! strlen($item->desc) >= 350 ? mb_strcut($item->desc, 0, 350)."..." : $item->desc !!}</p>
                        <div class="news-item-bottom">
                            <h6>{{ $item->created_at->format('d.m.Y') }}</h6>
                            <div class="admin-news-link">
                                @if (Auth::user() && Auth::user()->isAdmin)
                                <a href="{{URL::route('edit-news', $item->id)}}" class="button admin-button"><img src="{{ asset('img/edit.svg') }}" alt=""></a>
                                <button class="button admin-button" onclick="openDeleteModal('{{ $item->id }}')"><img src="{{ asset('img/delete.svg') }}" alt=""></button>
                                @endif
                                <a href="/news/{{ $item->id }}" class="news-bottom-link">
                                    <h6>Читать далее</h6>
                                    <img src="{{ asset('img/continue.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        @if (Auth::user() && Auth::user()->isAdmin)
                        @include('modal', ['id'=>$item->id, 'route'=>'delete-news'])
                        @endif
                    </article>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        @if ($data->total() > $data->count())
                        {{ $data->links() }}
                        @endif
                    </div>
                </div>
            </section>
        </main>
        @include('footer')
    </div>
    @include('scrollup')
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
</body>

</html>