@extends('main')

@section('title')
    Изменить решение
@endsection

@section('content')

    <section class="login">
        <h2>Редактирование решения</h2>
        <form class="form" method="post" action="{{ url('/updateInstall') }}" enctype="multipart/form-data">
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
            <input type="text" placeholder="название" name="title" value="{{ $data->title }}" />
            <input type="number" placeholder="цена" name="price" value="{{ $data->price }}" />
            <input class="file" type="file" name="photo" accept="image/*" />
            <button type="submit">изменить</button>
        </form>
    </section>

@endsection
