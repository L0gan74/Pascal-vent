@extends('main')

@section('title')
    Добавить решение
@endsection

@section('content')

    <section class="login">
        <h2>Добавление решения</h2>

        <form class="form" method="post" action="{{ url('/addInstall') }}" enctype="multipart/form-data">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="error">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @csrf
            <input type="text" name="title" placeholder="название" />
            <input type="number" name="price" placeholder="цена" />
            <input class="file" name="photo" type="file" accept="image/*" />
            <button type="submit">добавить</button>
        </form>
    </section>

@endsection
