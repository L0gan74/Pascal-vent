@extends('adminlte::page')

@section('title', 'Добавить решение')

@section('content_header')
    <h1>Добавить решение</h1>
@stop

@section('content')

    <form style="max-width: 300px;" method="post" action="{{ url('/admin/addInstall') }}" enctype="multipart/form-data">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        @csrf
        <input type="text" name="title" placeholder="название" class="form-control m-2" />
        <input type="number" name="price" placeholder="цена" class="form-control m-2" />
        <div class="custom-file m-2">
            <input class="file custom-file-input form-control" id="customFile" name="photo" type="file"
                accept="image/*" />
            <label class="custom-file-label" for="customFile">Выберите файл</label>
        </div>
        <button type="submit" class="btn btn-primary m-2">добавить</button>
    </form>

@endsection
