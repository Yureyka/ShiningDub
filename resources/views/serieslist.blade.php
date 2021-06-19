<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <title>ShiningDub | Список серий</title>
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
                        <h1 class="content-title">Все серии</h1>
                        @if (Auth::user() && Auth::user()->isAdmin)
                        <a class="button" href="{{URL::route('addvideo')}}">Добавить</a>
                        @endif
                    </div>
                    @if ($data->isEmpty())
                    <h3>Упс... Тут пусто :(</h3>
                    @endif

                    @foreach ($data as $item)
                    <article class="video-card">
                        <div class="video-img">
                            <img src="{{ $item->poster ? $item->poster : 'img/not-found.png' }}">
                        </div>
                        <div class="video-desc">
                            <div>
                                <h2>{{ $item->title }}</h2>
                                <p>{{ strlen($item->desc) >= 400 ? mb_strcut($item->desc, 0, 400)."..." : $item->desc }}</p>
                            </div>
                            <div class="video-link">
                                @if (Auth::user() && Auth::user()->isAdmin)
                                <a href="{{URL::route('edit-video', $item->id)}}" class="button admin-button"><img src="{{ asset('img/edit.svg') }}" alt=""></a>
                                <button class="button admin-button" onclick="openDeleteModal('{{ $item->id }}')"><img src="{{ asset('img/delete.svg') }}" alt=""></button>
                                @endif
                                <a class="button" href="/video/{{ $item->id }}">Смотреть</a>
                            </div>
                        </div>
                        @if (Auth::user() && Auth::user()->isAdmin)
                        @include('modal', ['id'=>$item->id, 'route'=>'delete-video'])
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
    @if (Auth::user() && Auth::user()->isAdmin)
    <script src="{{ asset('js/modal.js') }}"></script>
    @endif

</body>

</html>