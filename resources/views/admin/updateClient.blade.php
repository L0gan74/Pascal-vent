@extends('adminlte::page')

@section('title', 'Изменить клиента')

@section('content_header')
    <h1>Изменить клиента</h1>
@stop

@section('content')

    <form style="max-width: 300px;" method="post" action="{{ url('/admin/updateClient') }}" enctype="multipart/form-data">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        @csrf
        <input type="hidden" name="id" value="{{ $id }}">
        <input type="hidden" name="old_img" value="{{ $data->photo }}">
        <div class="custom-file m-2">
            <input type="file" name="photo" accept="image/*" class="file custom-file-input form-control"
                id="customFile" />
            <label class="custom-file-label" for="customFile">Выберите файл</label>
        </div>
        <button type="submit" class="btn btn-primary m-2">изменить</button>
    </form>

@endsection
