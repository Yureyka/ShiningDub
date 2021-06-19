<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <title>ShiningDub | Контакты</title>
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
                    <h1 class="content-title">Вы можете связаться с нами</h1>
                    <ul class="contacts-list"> 
                        <li>
                            <a href="https://www.youtube.com/channel/UCYSE32C-bF2924qxjWx1Khw" target="_blank"><strong>Наш канал на Youtube</strong></a>
                        </li>
                        <li>
                            <a href="https://vk.com/shiningdub" target="_blank"><strong>Группа в ВК</strong></a>
                        </li>
                    </ul>
                    <p>По всем вопросам обращаться по адресу: <a href="mailto:support@shiningdub.ru">support@shiningdub.ru</a></p>



                </div>
            </section>
        </main>
        @include('footer')
    </div>
    @include('scrollup')
    <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>