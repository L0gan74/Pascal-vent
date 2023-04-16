@extends('main')

@section('title')
    Добавить клиента
@endsection

@section('content')

    <section class="login">
        <h2>Добавление клиента</h2>

        <form class="form" method="post" action="{{ url('/addClient') }}" enctype="multipart/form-data">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="error">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @csrf
            <input class="file" name="photo" type="file" accept="image/*" />
            <button type="submit">добавить</button>
        </form>
    </section>

@endsection
