<header id="header">
    <a class="logo" href="{{URL::route('main')}}">
        <img src="{{ asset('img/logo.svg') }}" alt="ShiningDub">
    </a>
    <nav class="nav-bar">
        <ul class="nav-list">
            <li class="nav-item"><a href="{{URL::route('main')}}" class="link">Главная</a></li>
            <li class="nav-item"><a href="{{URL::route('series')}}" class="link">Список серий</a></li>
            <li class="nav-item"><a href="{{URL::route('news')}}" class="link">Новости</a></li>
            <li class="nav-item"><a href="{{URL::route('contacts')}}" class="link">Контакты</a></li>
        </ul>
        <button id="menu" class="nav-menu btn-menu-toggle"></button>
        <div class="search-box">
            <form action="{{ route('search') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" name="search" class="search" placeholder="Поиск по сайту..." required>
                <button type="submit" class="search-btn">
                    <img src="{{ asset('img/search.svg') }}" alt="">
                </button>
            </form>
        </div>
    </nav>
    <ul class="nav-list nav-list-mob">
        <li class="nav-item nav-item-mob"><a href="{{URL::route('main')}}" class="link">Главная</a></li>
        <li class="nav-item nav-item-mob"><a href="{{URL::route('series')}}" class="link">Список серий</a></li>
        <li class="nav-item nav-item-mob"><a href="{{URL::route('news')}}" class="link">Новости</a></li>
        <li class="nav-item nav-item-mob"><a href="{{URL::route('contacts')}}" class="link">Контакты</a></li>
    </ul>
</header>