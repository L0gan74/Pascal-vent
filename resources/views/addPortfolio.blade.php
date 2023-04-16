@extends('main')

@section('title')
    Добавить портфолио
@endsection

@section('content')

    <section class="login">
        <h2>Добавление портфолио</h2>

        <form class="form" method="post" action="{{ url('/addPortfolio') }}" enctype="multipart/form-data">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="error">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @csrf
            <input type="text" name="title" placeholder="название" />
            <input type="text" name="text" placeholder="текcт" />
            <input class="file" name="photo" type="file" accept="image/*" />
            <button type="submit">добавить</button>
        </form>
    </section>

@endsection
