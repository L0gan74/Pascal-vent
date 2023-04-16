@extends('main')

@section('title')
    Вход
@endsection

@section('content')

    <section class="login">
        <h2>Регистрация</h2>

        <form class="form" method="POST" action="/register">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="error">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @csrf
            <input type="email" name="email" value="{{ old('email') }}" placeholder="EMAIL" />
            <input type="password" name="password" placeholder="пароль" />
            <input type="password" name="password_confirmation" placeholder="подтвердите пароль" />
            <button type="submit">зарегистрироватся</button>
            <a href="/login">уже зарегистрованы?</a>
        </form>
    </section>

@endsection
