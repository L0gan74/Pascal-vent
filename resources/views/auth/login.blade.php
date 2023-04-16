@extends('main')

@section('title')
    Вход
@endsection

@section('content')

    <section class="login">
        <h2>Авторизация</h2>
        <form class="form" method="post" action="/login">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="error">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @csrf
            <input type="email" name="email" placeholder="EMAIL" />
            <input type="password" name="password" placeholder="пароль" />
            <button type="submit">войти</button>
            <a href="/register">Зарегистрироватся</a>
        </form>
    </section>

@endsection
