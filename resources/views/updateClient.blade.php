@extends('main')

@section('title')
    Изменить клиента
@endsection

@section('content')

    <section class="login">
        <h2>Редактирование клиента</h2>
        <form class="form" method="post" action="{{ url('/updateClient') }}" enctype="multipart/form-data">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="error">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <input type="hidden" name="old_img" value="{{ $data->photo }}">
            <input class="file" type="file" name="photo" accept="image/*" />
            <button type="submit">изменить</button>
        </form>
    </section>

@endsection
