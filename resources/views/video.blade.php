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
    <link rel="stylesheet" href="{{ asset('css/plyr.css') }}" />
</head>

<body>
    <div class="container">
        @include('header')
        <main class="content-block">
            <section class="row">
                <div class="col-lg-6 mb-3">
                    <video id="player" playsinline controls data-poster="{{ asset($data->poster) }}">
                        <source src="{{ $data->link }}" type="video/mp4" />
                    </video>
                </div>
                <div class="col-lg-6">
                    <div class="video-desc">
                        <div>
                            <h2>{{ $data->title }}</h2>
                            <p>{{ $data->desc }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 comments">
                    <h3>Комментарии</h3>
                    <div>
                        <form class="comment-form">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <input name="video_id" type="text" hidden value="{{$data->id}}">
                            <input name="fullname" type="text" placeholder="Ваше имя" required>
                            <textarea name="comment" placeholder="Понравилась озвучка? Оставьте комментарий" rows="3" required></textarea>
                            <div class="form-button">
                                <button id="send-comment" class="button" type="submit">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="comment-container" class="col-md-10 mt-5 mx-auto">

                    @foreach ($data->comments as $comment)
                    <div class="comment">
                        @if (Auth::user() && Auth::user()->isAdmin)
                        <form action="{{URL::route('delete-comment', $comment->id)}}" method="POST">
                            {!! method_field('delete') !!}
                            {!! csrf_field() !!}
                            <button class="button comment-button"><img src="{{ asset('img/delete.svg') }}" alt=""></button>
                        </form>
                        @endif
                        <img class="comment-avatar" src="{{ asset('img/kwami/' . rand(1, 19) . '.jpg') }}" alt="">

                        <div class="comment-desc">
                            <div class="comment-stamp">
                                <h6>{{ $comment->fullname }}</h6>
                                <p>{{ $comment->created_at->format('Y-m-d H:i') }}</p>
                            </div>
                            <p>{{ $comment->comment }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </main>
        @include('footer')
    </div>
    @include('scrollup')
    <script src="{{ asset('js/plyr.js') }}"></script>
    <script>
        const player = new Plyr('#player');
    </script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/sendComments.js') }}"></script>
</body>

</html>