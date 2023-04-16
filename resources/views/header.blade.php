<header class="header">
    <img class="logo" src="/img/logo.svg" alt="logo" />
    <nav class="nav">
        <ul>
            <li><a href="{{ url('/#services') }}">Услуги</a></li>
            <li><a href="{{ url('/#about') }}">О Нас</a></li>
            <li><a href="{{ url('/#polza') }}">Польза Продукта</a></li>
            <li><a href="{{ url('/#obor') }}">Оборудование</a></li>
            <li><a href="{{ url('/#works') }}">Этапы Работы</a></li>
            <li><a href="{{ url('/#rew') }}">Отзывы</a></li>
            @if (Auth::check() && Auth::user()->role === 'admin')
                <li><a href="{{ url('/admin') }}">Админ</a></li>
            @endif
            @if (Auth::check())
                <li>
                    <form action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <button type="submit">Выйти</button>
                    </form>
                </li>
            @else
                <li><a href="{{ url('/register') }}">Регистрация</a></li>
                <li>
                    <a href="{{ url('/login') }}">Авторизация</a>
                </li>
            @endif
        </ul>
    </nav>
    <span class="header-btn">
        <button class="open-button" type="button">Связаться</button>
    </span>
    <button class="menu-toggler" type="button">
        <img class="burger" src="./img/burger.svg" alt="burger" />
    </button>
    <div class="menu-wrapper">
        <div class="menu">
            <ul>
                <li><a href="{{ url('/#services') }}">Услуги</a></li>
                <li><a href="{{ url('/#about') }}">О Нас</a></li>
                <li><a href="{{ url('/#polza') }}">Польза Продукта</a></li>
                <li><a href="{{ url('/#obor') }}">Оборудование</a></li>
                <li><a href="{{ url('/#works') }}">Этапы Работы</a></li>
                <li><a href="{{ url('/#rew') }}">Отзывы</a></li>
                @if (Auth::check() && Auth::user()->role === 'admin')
                    <li><a href="{{ url('/admin') }}">Админ</a></li>
                @endif
                @if (Auth::check())
                    <li>
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <button type="submit">Выйти</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ url('/register') }}">Регистрация</a></li>
                    <li>
                        <a href="{{ url('/login') }}">Авторизация</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>
<div class="popup">
    <div class="popup-content">
        <button class="close-button">
            <img src="./img/close.svg" alt="close" />
        </button>
        <h3>Быстрая связь</h3>
        <p class="popup-title">с нами <span></span></p>
        <div class="popup-main">
            <p class="popup-main__desc">
                Вы можете набрать нам, и менеджеры Pascal Vent с радостью
                проконсультирует Вас по любому вопросу и помогут определиться с
                выбором.
            </p>
            <p class="popup-main__tel">График приема звонков:</p>
            <span class="time">
                <img src="./img/time.svg" alt="time" />ПН-СБ с 9:00 до 19:00
            </span>
            <div class="popup-tel">
                <span class="popup-tel__first"><img src="./img/tel.png" alt="tel" />+ 7 492 373 63 31</span>
                <span><img src="./img/tel.png" alt="tel" />+ 7 492 373 63 31</span>
            </div>
        </div>
    </div>
</div>
@vite(['resources/js/menu.js'])